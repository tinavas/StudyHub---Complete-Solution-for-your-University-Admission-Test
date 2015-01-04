CHANGELOG
=========

1.6.0 (2014-08-19)
------------------

* add phpunit back to require-dev in composer.json
* added tld_live flag to tell validator whether to use local or live data for TLD list
* changed to psr4 autoloading
* fixed bugs with missing framework call getRemote
* implemented local file by default
* make sure we use hampel/validate v2.1 minimum

1.5.5 (2014-06-06)
------------------

* less restrictive versioning for dependencies

1.5.4 (2014-06-01)
------------------

* removed dev dependency on phpunit

1.5.3 (2013-12-16)
------------------

* forgot to set the container in the validator

1.5.2 (2013-12-16)
------------------

* added Mockery::close() call to ValidateServiceProviderTest::tearDown()
* made service provdier a bit more modular
* changed service provider test to actually call the boot method (with partial mock of the service provider)
* lots of comments in service provider test, minor change in logic - compare rules and extension arrays directly

1.5.1 (2013-12-15)
------------------

* removed orchestral/testbench from require-dev added missing required Illuminate packages
* simplified service provider code
* refactored TldCache class to avoid using Facades, pass in container in constructor instead
* refactored Validator to avoid using Facades, use container from base Validator class instead
* updated to latest http://data.iana.org/TLD/tlds-alpha-by-domain.txt
* rewrote unit tests to not use Orchestra Testbench

1.5.0 (2013-12-13)
------------------

* updated framework requirement to 4.1.*

1.4.4 (2013-11-14)
------------------

* added presence verifier to extended validation class

1.4.3 (2013-10-21)
------------------

* implemented passing of translation array to validator via Factory::extend method
* minimum version of illuminate/validation set to 4.0.9 to use additional parameter on Factory::extend

1.4.2 (2013-10-15)
------------------

* bound an instance of our custom Validator class to container to allow us to pass dependencies

1.4.1 (2013-10-14)
------------------

* service provider update

1.4.0 (2013-10-13)
------------------

* rewrote service provider to use extend() rather than resolve() to add additional validation functions - turns out that
 you can only use a class which extends the validation class once - so if you have two packages or service providers
 which both extend the validation class, only one will be used. Adding extensions to the base class one-by-one gets
 around this limitation.

1.3.1 (2013-10-12)
------------------

* fixed bug in Validator::validateDomain(), was still using old static code

1.3.0 (2013-10-11)
------------------

* updated requirements to use hampel/validate v2.0.*
* re-wrote validation class to use new non-static methods from hampel/validate
* added Mockery to dev requirements
* renamed ValidateHelper.php to TldCache.php
* registered 'validate-laravel.tlds' and 'validate-laravel.validator' services in ValidateServiceProvider
* updated TLD list to latest version from http://data.iana.org/TLD/tlds-alpha-by-domain.txt
* added unit tests for TLD cache class
* more unit tests for service provider
* added unit tests for validator class

1.2.0 (2013-10-08)
------------------

* added new validation: uploaded_file

1.1.0 (2013-09-27)
------------------

* removed auth validation - now provided by package hampel/validate-laravel-auth

1.0.1 (2013-09-05)
------------------

* changed Validator::validateAuth to use configurable credential keys (username / password)
* updated README with more information about configuration

1.0.0 (2013-08-29)
------------------

* updated composer.json
* updated README
* added CHANGELOG
* added some basic unit tests

0.4.0 (2013-08-15)
------------------

* added ipv4_public and ipv6_public validators

0.3.0 (2013-07-25)
------------------

* new validations: bool, ip_public, domain, domain_in, tld, tld_in
* added package config for cache information and TLD download URL
* added caching of TLD data

0.2.0 (2013-07-24)
------------------

* added exists_or_zero validation

0.1.0 (2013-07-24)
------------------

* initial release