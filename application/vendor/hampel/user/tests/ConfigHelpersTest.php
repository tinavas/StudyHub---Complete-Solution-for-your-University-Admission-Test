<?php

class ConfigHelperTest extends \PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		parent::setUp();

		$this->app = Mockery::mock('AppMock');
		$this->app->shouldReceive('instance')->andReturn($this->app);

		Illuminate\Support\Facades\Facade::setFacadeApplication($this->app);
		Illuminate\Support\Facades\App::swap($this->app);

		$this->validator = Mockery::mock('Hampel\Validate\Validator');

		$this->config = Mockery::mock('Illuminate\Config\Repository');
		Illuminate\Support\Facades\Config::swap($this->config);
	}

	public function testUserIsEmail()
	{
		$this->app->shouldReceive('make')->once()->andReturn($this->validator);
		$this->validator->shouldReceive('isEmail')->once()->with('foo@example.com')->andReturn(true);

		$this->assertEquals(true, user_is_email('foo@example.com'));
	}

	public function testUserCredentialField()
	{
		$this->app->shouldReceive('make')->once()->andReturn($this->validator);
		$this->validator->shouldReceive('isEmail')->once()->with('foo@example.com')->andReturn(true);
		$this->config->shouldReceive('get')->once()->with('user::email_field', '')->andReturn('bar');

		$this->assertEquals('bar', user_credential_field('foo@example.com'));

		$this->app->shouldReceive('make')->once()->andReturn($this->validator);
		$this->validator->shouldReceive('isEmail')->once()->with('foo')->andReturn(false);
		$this->config->shouldReceive('get')->once()->with('user::username_field', '')->andReturn('bar');

		$this->assertEquals('bar', user_credential_field('foo'));
	}

	public function testUserFields()
	{
		$this->config->shouldReceive('get')->once()->with('user::id_field', '')->andReturn('bar');
		$this->assertEquals('bar', user_id_field());

		$this->config->shouldReceive('get')->once()->with('user::username_field', '')->andReturn('bar');
		$this->assertEquals('bar', user_username_field());

		$this->config->shouldReceive('get')->once()->with('user::email_field', '')->andReturn('bar');
		$this->assertEquals('bar', user_email_field());

		$this->config->shouldReceive('get')->once()->with('user::password_field', '')->andReturn('bar');
		$this->assertEquals('bar', user_password_field());

		$this->config->shouldReceive('get')->once()->with('user::remember_token_field', '')->andReturn('bar');
		$this->assertEquals('bar', user_remember_token_field());

		$this->config->shouldReceive('get')->once()->with('user::connection', '')->andReturn('bar');
		$this->assertEquals('bar', user_connection_name());

		$this->config->shouldReceive('get')->once()->with('auth.table', '')->andReturn('bar');
		$this->assertEquals('bar', user_table());

		$this->config->shouldReceive('get')->once()->with('auth.model', '')->andReturn('bar');
		$this->assertEquals('bar', user_model());
	}

	public function tearDown() {
		Mockery::close();
	}
}

?>
