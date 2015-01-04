<?php namespace Hampel\Validate\Laravel;

use Mockery;

class TldCacheTest extends \PHPUnit_Framework_TestCase
{

	public function testGetTlds()
	{
		$config = Mockery::mock('Illuminate\Config\Repository');
		$config->shouldReceive('get')->once()->with('validate-laravel::cache_key')->andReturn('tlds');
		$config->shouldReceive('get')->once()->with('validate-laravel::cache_expiry')->andReturn(1440);

		$cache = Mockery::mock('Illuminate\Cache\CacheManager');
		$cache->shouldReceive('remember')->once()->with('tlds', 1440, Mockery::type('Closure'))->andReturn(
			array('com', 'net', 'org')
		);

		$container = Mockery::mock('Illuminate\Container\Container');
		$container->shouldReceive('offsetGet')->twice()->with('config')->andReturn($config);
		$container->shouldReceive('offsetGet')->once()->with('cache')->andReturn($cache);

		$tldcache = new TldCache($container);
		$tlds = $tldcache->getTlds();

		$this->assertTrue(is_array($tlds));
		$this->assertTrue(count($tlds) == 3);
		$this->assertTrue($tlds[0] == 'com');
	}

	public function testRefreshTldCache()
	{
		$container = Mockery::mock('Illuminate\Container\Container');
		$log = Mockery::mock('Illuminate\Log\Writer');
		$config = Mockery::mock('Illuminate\Config\Repository');

		$container->shouldReceive('offsetGet')->once()->with('log')->andReturn($log);
		$container->shouldReceive('offsetGet')->once()->with('config')->andReturn($config);
		$config->shouldReceive('get')->once()->with('validate-laravel::tld_path')->andReturn(
			'tests/Fixtures/tlds-alpha-by-domain.txt'
		);
		$log->shouldReceive('info')->once()->with(
			'Added 3 TLDs to cache from tests/Fixtures/tlds-alpha-by-domain.txt'
		);

		$tldcache = new TldCache($container);
		$tlds = $tldcache->refreshTldCache();

		$this->assertTrue(is_array($tlds));
		$this->assertTrue(count($tlds) == 3);
		$this->assertTrue($tlds[0] == 'com');
	}

	public function tearDown() {
		Mockery::close();
	}

}

?>
