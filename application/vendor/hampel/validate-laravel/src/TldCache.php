<?php namespace Hampel\Validate\Laravel;

use Illuminate\Container\Container;

class TldCache
{
	/**
	 * The application container instance.
	 *
	 * @var \Illuminate\Container\Container
	 */
	protected $app;

	public function __construct(Container $app)
	{
		$this->app = $app;
	}

	public function getTlds()
	{
		$cache_key = $this->app['config']->get('validate-laravel::cache_key');
		$cache_expiry = $this->app['config']->get('validate-laravel::cache_expiry');

		$self = $this;

		$tlds = $this->app['cache']->remember($cache_key, $cache_expiry, function() use($self)
		{
			return $self->refreshTldCache();
		});

		return $tlds;
	}

	public function refreshTldCache()
	{
		$tlds = array();

		$tld_path = $this->app['config']->get('validate-laravel::tld_path');

		if (empty($tld_path)) $tld_path = __DIR__ . '/tlds-alpha-by-domain.txt'; // use local file if blank path specified in config

		$tld_file = file_get_contents($tld_path);
		if ($tld_file === false) return $tlds; // return an empty array on failure

		$tld_array = explode("\n", $tld_file);
		foreach ($tld_array as $tld)
		{
			$tld = trim($tld);
			if (empty($tld)) continue; // skip blank lines
			if (substr($tld, 0, 1) == "#") continue; // skip # comments

			if (!preg_match('/^(?:[a-z]{2,63}|xn--[a-z0-9]+)$/i', $tld)) continue; // skip any invalid lines

			$tlds[] = strtolower($tld);
		}

		$this->app['log']->info("Added " . count($tlds) . " TLDs to cache from {$tld_path}");

		return $tlds;
	}

	public function clearCache()
	{
		$cache_key = $this->app['config']->get('validate-laravel::cache_key');

		$this->app['cache']->forget($cache_key);
	}
}

?>
