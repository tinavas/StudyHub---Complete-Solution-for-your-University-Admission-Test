<?php namespace Hampel\WordPress\Hashing;

use Config;
use Illuminate\Support\ServiceProvider;
use Hautelook\Phpass\PasswordHash;

class WordPressHashServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$app = $this->app;

		$this->app['wordpress-hash'] = $this->app->share(function($app)
		{
			$iteration_count = $app['config']->get('wordpress-auth-laravel::hash.iteration_count');
			$portable_hashes = $app['config']->get('wordpress-auth-laravel::hash.portable_hashes');

			$hasher = new PasswordHash($iteration_count, $portable_hashes);

			return new WordPressHasher($hasher);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('wordpress-hash');
	}

}