<?php namespace Hampel\Validate\Laravel;

use Mockery;
use Illuminate\Validation\Factory;
use Illuminate\Support\Str;

class ValidateServiceProviderTest extends \PHPUnit_Framework_TestCase {

	public function testBoot()
	{
		// let's start with a translator, we're not testing that, so just mock it
		$translator = Mockery::mock('Symfony\Component\Translation\TranslatorInterface');
		$translator->shouldReceive('get');

		// presence verifier is for database lookups during validation - we'll mock this too
		$presence = Mockery::mock('Illuminate\Validation\PresenceVerifierInterface');

		// create a validation factory we can use, give it our mock translator and presence verifier to keep it happy
		$factory = new Factory($translator);
		$factory->setPresenceVerifier($presence);

		// let's get a mock container so any calls to $app can be kept happy
		$container = Mockery::mock('Illuminate\Container\Container');

		// we're not testing the bind functionality here, so just ignore calls to $app->bind
		$container->shouldReceive('bind');

		// if we get a call to $app['translator'], return our mock translator
		$container->shouldReceive('offsetGet')->with('translator')->andReturn($translator);

		// if we get a call to $app['validator'], return the validation factory we created earlier
		$container->shouldReceive('offsetGet')->with('validator')->andReturn($factory);

		// alright, ready to start - let's create a partial mock of our service provider, give it our mock container
		$sp = Mockery::mock('Hampel\Validate\Laravel\ValidateServiceProvider[package]', array($container));

		// ignore any calls to package
		$sp->shouldReceive('package');

		// ... and, go! This will execute our logic in the service provider to add our custom validation rules
		$sp->boot();

		// now, let's get a validator we can use to test things with
		$validator = $factory->make(array(), array());

		// get all of the rules that are defined for the service provider
		$rules = $sp->getRules();

		// let's get all our extensions that were hopefully added when we booted the service provider
		$extensions = $validator->getExtensions();

		// check that all of our rules are there
		$this->assertTrue($rules == array_keys($extensions));

		// loop through the extensions
		foreach ($extensions as $rule => $class_and_method)
		{
			// check the class@method string is correct
			$this->assertEquals('Hampel\Validate\Laravel\Validator@' . 'validate' . studly_case($rule), $class_and_method);

			// split out the class and the method
			list($class, $method) = Str::parseCallback($class_and_method, null);

			// check the method actually exists for the class
			$this->assertTrue(method_exists($class, $method));
		}
	}

	public function tearDown() {
		Mockery::close();
	}

}

?>