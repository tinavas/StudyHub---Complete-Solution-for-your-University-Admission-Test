<?php namespace Hampel\Validate\Laravel;

use Mockery;
use Hampel\Validate\Laravel\Validator as ValidatorClass;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ValidatorTest extends \PHPUnit_Framework_TestCase
{
	public function testValidateUniqueOrZero()
	{
		$lang = Mockery::mock('Illuminate\Translation\Translator');
		$lang->shouldReceive('trans')->once()->with('validation.custom.foo.unique_or_zero');
		$lang->shouldReceive('trans')->once()->with('validation.attributes.foo');

		$db = Mockery::mock('Illuminate\Validation\PresenceVerifierInterface');
		$db->shouldReceive('getCount')->never();

		$v = new ValidatorClass($lang, array('foo' => 0), array('foo' => 'unique_or_zero:bar'));
		$v->setPresenceVerifier($db);
		$this->assertTrue($v->passes());

		$db = Mockery::mock('Illuminate\Validation\PresenceVerifierInterface');
		$db->shouldReceive('getCount')->once()->with('bar', 'foo', 1, null, null, array())->andReturn(0);

		$v = new ValidatorClass($lang, array('foo' => 1), array('foo' => 'unique_or_zero:bar'));
		$v->setPresenceVerifier($db);
		$this->assertTrue($v->passes());

		$db = Mockery::mock('Illuminate\Validation\PresenceVerifierInterface');
		$db->shouldReceive('getCount')->once()->with('bar', 'foo', 1, null, null, array())->andReturn(1);

		$v = new ValidatorClass($lang, array('foo' => 1), array('foo' => 'unique_or_zero:bar'));
		$v->setPresenceVerifier($db);
		$this->assertFalse($v->passes());
	}

	public function testValidateExistsOrZero()
	{
		$lang = Mockery::mock('Illuminate\Translation\Translator');
		$lang->shouldReceive('trans')->once()->with('validation.custom.foo.exists_or_zero');
		$lang->shouldReceive('trans')->once()->with('validation.attributes.foo');

		$db = Mockery::mock('Illuminate\Validation\PresenceVerifierInterface');
		$db->shouldReceive('getCount')->never();

		$v = new ValidatorClass($lang, array('foo' => 0), array('foo' => 'exists_or_zero:bar'));
		$v->setPresenceVerifier($db);
		$this->assertTrue($v->passes());

		$db = Mockery::mock('Illuminate\Validation\PresenceVerifierInterface');
		$db->shouldReceive('getCount')->once()->with('bar', 'foo', 1, null, null, array())->andReturn(1);

		$v = new ValidatorClass($lang, array('foo' => 1), array('foo' => 'exists_or_zero:bar'));
		$v->setPresenceVerifier($db);
		$this->assertTrue($v->passes());

		$db = Mockery::mock('Illuminate\Validation\PresenceVerifierInterface');
		$db->shouldReceive('getCount')->once()->with('bar', 'foo', 1, null, null, array())->andReturn(0);

		$v = new ValidatorClass($lang, array('foo' => 1), array('foo' => 'exists_or_zero:bar'));
		$v->setPresenceVerifier($db);
		$this->assertFalse($v->passes());
	}

	public function testValidateBool()
	{
		$lang = Mockery::mock('Illuminate\Translation\Translator');
		$lang->shouldReceive('trans')->once()->with('validation.custom.foo.bool');
		$lang->shouldReceive('trans')->once()->with('validation.attributes.foo');

		$validator = Mockery::mock('Hampel\Validate\Validator');
		$validator->shouldReceive('isBool')->once()->with(0)->andReturn(true);
		$validator->shouldReceive('isBool')->once()->with('no')->andReturn(true);
		$validator->shouldReceive('isBool')->once()->with('bar')->andReturn(false);

		$container = Mockery::mock('Illuminate\Container\Container');
		$container->shouldReceive('make')->times(3)->with('validate-laravel.validator')->andReturn($validator);

		$v = new ValidatorClass($lang, array('foo' => 0), array('foo' => 'bool'));
		$v->setContainer($container);
		$this->assertTrue($v->passes());

		$v = new ValidatorClass($lang, array('foo' => 'no'), array('foo' => 'bool'));
		$v->setContainer($container);
		$this->assertTrue($v->passes());

		$v = new ValidatorClass($lang, array('foo' => 'bar'), array('foo' => 'bool'));
		$v->setContainer($container);
		$this->assertFalse($v->passes());
	}

	public function testValidateDomainIn()
	{
		$lang = Mockery::mock('Illuminate\Translation\Translator');
		$lang->shouldReceive('trans')->once()->with('validation.custom.foo.domain_in')->andReturn(
			':attribute TLD must be one of :values'
		);
		$lang->shouldReceive('trans')->once()->with('validation.attributes.foo')->andReturn('foo');

		$validator = Mockery::mock('Hampel\Validate\Validator');
		$validator->shouldReceive('isDomain')->once()->with('bar.com', array('com', 'net', 'org'))->andReturn(true);
		$validator->shouldReceive('isDomain')->once()->with('bar.biz', array('com', 'net', 'org'))->andReturn(false);

		$container = Mockery::mock('Illuminate\Container\Container');
		$container->shouldReceive('make')->twice()->with('validate-laravel.validator')->andReturn($validator);

		$v = new ValidatorClass($lang, array('foo' => 'bar.com'), array('foo' => 'domain_in:com,net,org'));
		$v->setContainer($container);
		$this->assertTrue($v->passes());

		$v = new ValidatorClass($lang, array('foo' => 'bar.biz'), array('foo' => 'domain_in:com,net,org'));
		$v->setContainer($container);
		$this->assertFalse($v->passes());
		$this->assertEquals($v->errors()->first('foo'), 'foo TLD must be one of com, net, org');
	}

	public function testValidateTldPassesLive()
	{
		$lang = Mockery::mock('Illuminate\Translation\Translator');
		$container = Mockery::mock('Illuminate\Container\Container');
		$config = Mockery::mock('Illuminate\Config\Repository');
		$validator = Mockery::mock('Hampel\Validate\Validator');
		$tldcache = Mockery::mock('Hampel\Validate\Laravel\TldCache');

		$container->shouldReceive('make')->once()->with('validate-laravel.validator')->andReturn($validator);
		$container->shouldReceive('offsetGet')->once()->with('config')->andReturn($config);
		$config->shouldReceive('get')->once()->with('validate-laravel::tld_live')->andReturn(true);
		$container->shouldReceive('make')->once()->with('validate-laravel.tlds')->andReturn($tldcache);
		$tldcache->shouldReceive('getTlds')->once()->andReturn(array('com', 'net', 'org'));
		$validator->shouldReceive('isTld')->once()->with('bar.com', array('com', 'net', 'org'))->andReturn(true);

		$v = new ValidatorClass($lang, array('foo' => 'bar.com'), array('foo' => 'tld'));
		$v->setContainer($container);
		$this->assertTrue($v->passes());
	}

	public function testValidateTldPassesLocal()
	{
		$lang = Mockery::mock('Illuminate\Translation\Translator');
		$container = Mockery::mock('Illuminate\Container\Container');
		$config = Mockery::mock('Illuminate\Config\Repository');
		$validator = Mockery::mock('Hampel\Validate\Validator');
		$tldcache = Mockery::mock('Hampel\Validate\Laravel\TldCache');

		$container->shouldReceive('make')->once()->with('validate-laravel.validator')->andReturn($validator);
		$container->shouldReceive('offsetGet')->once()->with('config')->andReturn($config);
		$config->shouldReceive('get')->once()->with('validate-laravel::tld_live')->andReturn(false);
		$validator->shouldReceive('getTlds')->once()->andReturn(array('com', 'net', 'org'));
		$validator->shouldReceive('isTld')->once()->with('bar.com', array('com', 'net', 'org'))->andReturn(true);

		$v = new ValidatorClass($lang, array('foo' => 'bar.com'), array('foo' => 'tld'));
		$v->setContainer($container);
		$this->assertTrue($v->passes());
	}

	public function testValidateTldFailsLive()
	{
		$lang = Mockery::mock('Illuminate\Translation\Translator');
		$container = Mockery::mock('Illuminate\Container\Container');
		$config = Mockery::mock('Illuminate\Config\Repository');
		$validator = Mockery::mock('Hampel\Validate\Validator');
		$tldcache = Mockery::mock('Hampel\Validate\Laravel\TldCache');

		$container->shouldReceive('make')->once()->with('validate-laravel.validator')->andReturn($validator);
		$container->shouldReceive('offsetGet')->once()->with('config')->andReturn($config);
		$config->shouldReceive('get')->once()->with('validate-laravel::tld_live')->andReturn(true);
		$container->shouldReceive('make')->once()->with('validate-laravel.tlds')->andReturn($tldcache);
		$tldcache->shouldReceive('getTlds')->once()->andReturn(array('com', 'net', 'org'));
		$validator->shouldReceive('isTld')->once()->with('bar.biz', array('com', 'net', 'org'))->andReturn(false);
		$lang->shouldReceive('trans')->once()->with('validation.custom.foo.tld');
		$lang->shouldReceive('trans')->once()->with('validation.attributes.foo');

		$v = new ValidatorClass($lang, array('foo' => 'bar.biz'), array('foo' => 'tld'));
		$v->setContainer($container);
		$this->assertFalse($v->passes());
	}

	public function testValidateTldFailsLocal()
	{
		$lang = Mockery::mock('Illuminate\Translation\Translator');
		$container = Mockery::mock('Illuminate\Container\Container');
		$config = Mockery::mock('Illuminate\Config\Repository');
		$validator = Mockery::mock('Hampel\Validate\Validator');
		$tldcache = Mockery::mock('Hampel\Validate\Laravel\TldCache');

		$container->shouldReceive('make')->once()->with('validate-laravel.validator')->andReturn($validator);
		$container->shouldReceive('offsetGet')->once()->with('config')->andReturn($config);
		$config->shouldReceive('get')->once()->with('validate-laravel::tld_live')->andReturn(false);
		$validator->shouldReceive('getTlds')->once()->andReturn(array('com', 'net', 'org'));
		$validator->shouldReceive('isTld')->once()->with('bar.biz', array('com', 'net', 'org'))->andReturn(false);
		$lang->shouldReceive('trans')->once()->with('validation.custom.foo.tld');
		$lang->shouldReceive('trans')->once()->with('validation.attributes.foo');

		$v = new ValidatorClass($lang, array('foo' => 'bar.biz'), array('foo' => 'tld'));
		$v->setContainer($container);
		$this->assertFalse($v->passes());
	}

	public function testIsValid()
	{
		$lang = Mockery::mock('Illuminate\Translation\Translator');

		$file = new UploadedFile(
			__DIR__.'/Fixtures/test.gif',
			'original.gif',
			null,
			filesize(__DIR__.'/Fixtures/test.gif'),
			UPLOAD_ERR_OK,
			true
		);

		$this->assertTrue($file->isValid());

		$v = new ValidatorClass($lang, array('file' => $file), array('file' => 'uploaded_file'));

		$this->assertTrue($v->passes());
	}

	/**
	 * @dataProvider uploadedFileErrorProvider
	 */
	public function testIsInvalidOnUploadError($error)
	{
		$lang = Mockery::mock('Illuminate\Translation\Translator');
		$lang->shouldReceive('trans')->once()->with('validation.custom.file.uploaded_file')->andReturn(
			':attribute upload did not succeed'
		);
		$lang->shouldReceive('trans')->once()->with('validation.attributes.file')->andReturn('file');

		$file = new UploadedFile(
			__DIR__.'/Fixtures/test.gif',
			'original.gif',
			null,
			filesize(__DIR__.'/Fixtures/test.gif'),
			$error
		);

		$this->assertFalse($file->isValid());

		$v = new ValidatorClass($lang, array('file' => $file), array('file' => 'uploaded_file'));
		$this->assertTrue($v->fails());
		$this->assertEquals($v->messages()->first('file'), 'file upload did not succeed');
	}

	public function uploadedFileErrorProvider()
	{
		return array(
			array(UPLOAD_ERR_INI_SIZE),
			array(UPLOAD_ERR_FORM_SIZE),
			array(UPLOAD_ERR_PARTIAL),
			array(UPLOAD_ERR_NO_TMP_DIR),
			array(UPLOAD_ERR_EXTENSION),
		);
	}

	public function tearDown() {
		Mockery::close();
	}


}

?>
