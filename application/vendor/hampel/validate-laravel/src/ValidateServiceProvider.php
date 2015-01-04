<?php namespace Hampel\Validate\Laravel;

use Illuminate\Support\ServiceProvider;
use Hampel\Validate\Validator as ValidatorClass;

class ValidateServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	protected $rules = array(
		'unique_or_zero', 'exists_or_zero', 'bool', 'ipv4_public', 'ipv6_public',
		'ip_public', 'domain', 'domain_in', 'tld', 'tld_in', 'uploaded_file'
	);

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('hampel/validate-laravel', 'validate-laravel', __DIR__);

		$app = $this->app;

		$this->app->bind('Hampel\Validate\Laravel\Validator', function($app)
		{
			$validator = new Validator($app['translator'], array(), array(), $app['translator']->get('validate-laravel::validation'));

			if (isset($app['validation.presence']))
			{
				$validator->setPresenceVerifier($app['validation.presence']);
			}

			$validator->setContainer($app);

			return $validator;
		});

		$this->addNewRules();
	}

	protected function addNewRules()
	{
		foreach ($this->getRules() as $rule)
		{
			$this->extendValidator($rule);
		}
	}

	protected function extendValidator($rule)
	{
		$method = 'validate' . studly_case($rule);
		$translation = $this->app['translator']->get('validate-laravel::validation');

		$this->app['validator']->extend($rule, 'Hampel\Validate\Laravel\Validator@' . $method, $translation[$rule]);
	}

	public function getRules()
	{
		return $this->rules;
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$app = $this->app;

		$this->app['validate-laravel.tlds'] = $this->app->share(function() use ($app)
		{
			return new TldCache($app);
		});

		$this->app['validate-laravel.validator'] = $this->app->share(function()
		{
			return new ValidatorClass();
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('validate-laravel.tlds', 'validate-laravel.validator');
	}

}