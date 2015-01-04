<?php namespace Hampel\WordPress\Auth;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Guard;

class WordPressAuthServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('hampel/wordpress-auth-laravel', 'wordpress-auth-laravel', __DIR__ . '/../../..');

		$this->bootDriver();
		$this->bootCommands();

	}

	public function bootDriver()
	{
		$app = $this->app;

		$this->app['auth']->extend('wordpress', function($app)
		{
			$model = $app['config']->get('auth.model');

			$provider = new WordPressUserProvider($app['wordpress-hash'], $model);

			return new Guard($provider, $app['session.store']);
		});
	}

	public function bootCommands()
	{
		$this->app['wordpress-auth.console.config'] = $this->app->share(function($app)
		{
			return new Console\ConfigCommand();
		});

		$this->commands(
			'wordpress-auth.console.config'
		);
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}