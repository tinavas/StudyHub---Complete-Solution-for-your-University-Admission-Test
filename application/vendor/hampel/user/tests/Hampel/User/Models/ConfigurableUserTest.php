<?php namespace Hampel\User\Models;

use Mockery;

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;

class ConfigurableUserTest extends \PHPUnit_Framework_TestCase
{

	public function setUp()
	{
		parent::setUp();

		$this->app = Mockery::mock('AppMock');
		$this->app->shouldReceive('instance')->andReturn($this->app);

		Facade::setFacadeApplication($this->app);
		App::swap($this->app);

		$this->validator = Mockery::mock('Hampel\Validate\Validator');

		$this->config = Mockery::mock('Illuminate\Config\Repository');
		Config::swap($this->config);

		$this->hash = Mockery::mock('\Illuminate\Hashing\BcryptHasher');
		Hash::swap($this->hash);
	}

	public function testConstructor()
	{
		$this->config->shouldReceive('get')->once()->with('user::connection', '')->andReturn('bar');
		$this->config->shouldReceive('get')->once()->with('auth.table', '')->andReturn('baz');
		$this->config->shouldReceive('get')->once()->with('user::password_field', '')->andReturn('boo');
		$this->config->shouldReceive('get')->once()->with('user::remember_token_field', '')->andReturn('bop');

		$foo = new ConfigurableUser();

		$this->assertEquals('bar', $foo->getConnectionName());
		$this->assertEquals('baz', $foo->getTable());

		$hidden = $foo->getHidden();
		$this->assertTrue(in_array('boo', $hidden));
		$this->assertTrue(in_array('bop', $hidden));
	}

	public function testValues()
	{
		$this->config->shouldReceive('get')->once()->with('user::connection', '')->andReturn('bar');
		$this->config->shouldReceive('get')->once()->with('auth.table', '')->andReturn('baz');
		$this->config->shouldReceive('get')->once()->with('user::password_field', '')->andReturn('something_other_than_password');
		$this->config->shouldReceive('get')->once()->with('user::remember_token_field', '')->andReturn('something_other_than_remember_token');

		$foo = new ConfigurableUser();

		$this->config->shouldReceive('get')->twice()->with('user::id_field', '')->andReturn('something_other_than_id');

		$foo->id = 1;
		$this->assertEquals(1, $foo->id);

		$this->hash->shouldReceive('make')->once()->with('boo')->andReturn('boo_hashed');
		$this->config->shouldReceive('get')->twice()->with('user::password_field', '')->andReturn('something_other_than_password');

		$foo->password = 'boo';
		$this->assertEquals('boo_hashed', $foo->password);

		$this->config->shouldReceive('get')->twice()->with('user::username_field', '')->andReturn('something_other_than_username');

		$foo->username = 'bop';
		$this->assertEquals('bop', $foo->username);

		$this->config->shouldReceive('get')->twice()->with('user::email_field', '')->andReturn('something_other_than_email');

		$foo->email = 'bin@example.com';
		$this->assertEquals('bin@example.com', $foo->email);

		$this->config->shouldReceive('get')->twice()->with('user::remember_token_field', '')->andReturn('something_other_than_remember_token');

		$foo->remember_token = 'bam';
		$this->assertEquals('bam', $foo->remember_token);

		$attributes = $foo->getAttributes();

		$this->assertArrayHasKey('something_other_than_id', $attributes);
		$this->assertEquals(1, $attributes['something_other_than_id']);

		$this->assertArrayHasKey('something_other_than_password', $attributes);
		$this->assertEquals('boo_hashed', $attributes['something_other_than_password']);

		$this->assertArrayHasKey('something_other_than_username', $attributes);
		$this->assertEquals('bop', $attributes['something_other_than_username']);

		$this->assertArrayHasKey('something_other_than_email', $attributes);
		$this->assertEquals('bin@example.com', $attributes['something_other_than_email']);

		$this->assertArrayHasKey('something_other_than_remember_token', $attributes);
		$this->assertEquals('bam', $attributes['something_other_than_remember_token']);

		$attributes = $foo->attributesToArray();

		$this->assertArrayHasKey('something_other_than_id', $attributes);
		$this->assertArrayNotHasKey('something_other_than_password', $attributes); // password is a "hidden" attribute
		$this->assertArrayHasKey('something_other_than_username', $attributes);
		$this->assertArrayHasKey('something_other_than_email', $attributes);
		$this->assertArrayNotHasKey('something_other_than_remember_token', $attributes); // remember_token is a "hidden" attribute
	}

	public function tearDown() {
		Mockery::close();
	}
}

?>
