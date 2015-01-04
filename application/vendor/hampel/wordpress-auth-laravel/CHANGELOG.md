CHANGELOG
=========

2.1.0 (2014-07-10)
------------------

* added configHelpers and extra config options to allow configuration of other database field names in case they ever
change in the future.
* split config into multiple files for ease of management
* added migration to create remember_token table
* implemented remember token functionality

2.0.1 (2014-07-09)
------------------

* changed functionality - we need to now pass the password credential with the array key 'password', regardless of what
the password field name is. This now mirrors the functionality of the core framework code and so the
WordPressUserProvider has been simplified, but left in place for future custom functionality.
* add dev-master alias to composer.json
* disabled auto-timestamps in WordPressUser model

2.0.0 (2014-07-08)
------------------

* implemented hampel/user configurable user model
* added config command

1.1.2 (2014-07-08)
------------------

* removed phpunit from dev dependencies
* less restrictive versioning for framework dependencies
* remove minimum-stability line from composer.json

1.1.1 (2013-12-18)
------------------

* removed orchestral/testbench from require-dev added missing required Illuminate packages
* passed container to User Provider and used that rather than facades
* tidied up test a little

1.1.0 (2013-12-13)
------------------

* updated framework requirement to 4.1.*

1.0.2 (2013-12-13)
------------------

* changed from using Facades within service provdider to accessing $this->app directly

1.0.1 (2013-10-08)
------------------

* fixed bug in passing session to Guard

1.0.0 (2013-09-05)
------------------

* initial release
