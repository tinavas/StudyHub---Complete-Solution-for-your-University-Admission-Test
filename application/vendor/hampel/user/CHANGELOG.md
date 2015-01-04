CHANGELOG
=========

2.1.2 (2014-07-10)
------------------

* swapped getConfiguredAttribute to getAttributeFromArray

2.1.1 (2014-07-10)
------------------

* removed redundant use clause from test class
* adjusted ConfigurableUser class to have custom accessors validate that field actually exists before trying to access
attributes array

2.1.0 (2014-07-09)
------------------

* more information in README, including an authentication example showing how to use a custom connection for validation
* README updates - array keys for validation should match form field names - and password key in authentication
credentials should always be 'password' regardless of password column name in database
* added id field to list of configurable fields ... while database column names are not case sensitive, PHP array keys
are - so a database with column named ID is NOT the same as column named id when $user->id is different to $user->ID

2.0.1 (2014-07-05)
------------------

* avoid using helpers in Service Provider
* added default values to helpers - otherwise if configuration not found, will return an empty array; fixed tests

2.0.0 (2014-07-04)
------------------

* changed BaseUser class to use traits; updated minimum framework version to 4.2 and php version to 5.4.0

1.1.2 (2014-07-10)
------------------

* swapped getConfiguredAttribute to getAttributeFromArray

1.1.1 (2014-07-10)
------------------

* removed redundant use clause from test class
* adjusted ConfigurableUser class to have custom accessors validate that field actually exists before trying to access
attributes array

1.1.0 (2014-07-09)
------------------

* added id field to list of configurable fields ... while database column names are not case sensitive, PHP array keys
are - so a database with column named ID is NOT the same as column named id when $user->id is different to $user->ID

1.0.2 (2014-07-05)
------------------

* avoid using helpers in Service Provider
* added default values to helpers - otherwise if configuration not found, will return an empty array; fixed tests

1.0.1 (2014-07-04)
------------------

* added 'remember_token' to hidden array
* fixed unit tests now that remember_token is hidden

1.0.0 (2014-07-04)
------------------

* initial release
