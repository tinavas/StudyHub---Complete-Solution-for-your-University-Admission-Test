<?php namespace Hampel\User;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider {

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
		$this->package('hampel/user');

		$this->configDefaults();
		$this->bootCommands();
	}

	public function configDefaults()
	{
		$connection = $this->app['config']->get('user::connection');

		if ($connection == 'default')
		{
			$this->app['config']->set('user::connection', $this->app['config']->get('database.default'));
		}
	}

	public function bootCommands()
	{
		$this->app['user.console.config'] = $this->app->share(function($app)
		{
			return new Console\ConfigCommand();
		});

		$this->commands(
			'user.console.config'
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
