<?php namespace Hampel\WordPress\Hashing;

use Mockery;
use Hautelook\Phpass\PasswordHash;

class WordPressHasherTest extends \PHPUnit_Framework_TestCase
{
	public function testMake()
	{
		$hasher = Mockery::mock('Hautelook\Phpass\PasswordHash');
		$hasher->shouldReceive('HashPassword')->once()->andReturn('$hashedvalue$');

		$wphash = new WordPressHasher($hasher);
		$hashed = $wphash->make('password');

		$this->assertEquals($hashed, '$hashedvalue$');
	}

	public function testCheck()
	{
		$hasher = Mockery::mock('Hautelook\Phpass\PasswordHash');
		$hasher->shouldReceive('CheckPassword')->once()->andReturn(true);

		$wphash = new WordPressHasher($hasher);

		$this->assertTrue($wphash->check('password', 'a string longer than 32 characters'));
	}

	public function testCheckMD5()
	{
		$hasher = Mockery::mock('Hautelook\Phpass\PasswordHash');
		$wphash = new WordPressHasher($hasher);

		$this->assertTrue($wphash->check('password', md5('password')));
	}

	public function testReal()
	{
		$hasher = new PasswordHash(8, true);
		$wphash = new WordPressHasher($hasher);

		$this->assertFalse($wphash->check('password', 'password'));
		$this->assertTrue($wphash->check('password', '$P$BUlhoqhGTU8MiUHGL/XMTze44j2OhW1'));
		$this->assertTrue($wphash->check('password', $wphash->make('password')));
	}

	public function tearDown()
	{
		Mockery::close();
	}
}

?>