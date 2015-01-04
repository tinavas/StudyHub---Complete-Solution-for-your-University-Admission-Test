WordPress Auth Driver for Laravel
=================================

Allows you to authenticate users against a user table from a WordPress installation

By [Simon Hampel](http://hampelgroup.com/).

Installation
------------

The recommended way of installing is through [Composer](http://getcomposer.org):

Require the package via Composer in your `composer.json`

	:::json
    {
        "require": {
            "hampel/wordpress-auth-laravel": "~2.0"
        }
    }

Run Composer to update the new requirement.

	:::bash
    $ composer update

Upgrading from v1.x
-------------------

While the functionality provided in v2.x is identical to that in v1.x, there are some fairly significant configuration
changes which need to be made when upgrading. This will also probably have an impact on the code you have written,
so be careful to update any code which reads the configuration files for this package.

For v2.0 we have now implemented our
[Configurable User Model - hampel/user](https://bitbucket.org/hampel/configurable-user-model), which provides a flexible
base model for use in applications where the user database doesn't adhere to the standard convention of using
username and password for authentication.

As such, much of the configuration that was previously in `app/config/packages/hampel/wordpress-auth-laravel/auth.php`
is now provided by the configuration for the User model.

To upgrade, first change `composer.json` and update the require line to `"hampel/wordpress-auth-laravel": "~2.0"`.

Run Composer to update the new requirement.

	:::bash
    $ composer update

Add the ValidateServiceProvider and UserServiceProvider providers to the providers array in `app/config/app.php` - make
sure they are added _before_ the WordPressAuthServiceProvider and WordPressHashServiceProvider entries:

	:::php
    'providers' => array(

        ...

		'Hampel\Validate\Laravel\ValidateServiceProvider', // <---- new entry
		'Hampel\User\UserServiceProvider', // <---- new entry
		'Hampel\WordPress\Auth\WordPressAuthServiceProvider',
		'Hampel\WordPress\Hashing\WordPressHashServiceProvider',

    ),

Next, run Composer to make Laravel update it's services list with the new providers:

    :::bash
    $ composer dump

If you haven't previously implemented the hampel/user package, publishing the configuration for it using the command:

   :::bash
   $ php artisan user:config

(alternatively, you can use the command `php artisan config:publish hampel/user`)

Follow the configuration instructions below for updating the Configurable User Model configuration. Many of the options
you will copy from the old `app/config/packages/hampel/wordpress-auth-laravel/auth.php` configuration file.

Remove the auth.php configuration file - it is no longer used:

    :::bash
    $ rm app/config/packages/hampel/wordpress-auth-laravel/auth.php

Rename the hashing.php configuration file to hash.php:

    :::bash
    $ cd app/config/packages/hampel/wordpress-auth-laravel
    $ mv hashing.php hash.php

Copy the new database.php configuration file from the package:

    :::bash
    $ cp vendor/hampel/wordpress-auth-laravel/src/config/database.php app/config/packages/hampel/wordpress-auth-laravel/

Don't forget to also change any environment-specific versions of the configuration file you may have created.

Finally, the WordPressUser class has moved and is now found in `Hampel\WordPress\Auth\Models\WordPressUser`. You will
need to update the code for any models which extend this class, or if you are using this user model directly, you will
need to update the auth configuration in `app/config/auth.php`:

    :::php
    'model' => 'Hampel\WordPress\Auth\Models\WordPressUser',

Refer to the usage examples below for information on how to implement authentication using this package.

Configuration
-------------

Open your Laravel config file `app/config/app.php` and add the following service providers to the providers array, if
they don't already exist there:

	:::php
    'providers' => array(

        ...

		'Hampel\Validate\Laravel\ValidateServiceProvider',
		'Hampel\User\UserServiceProvider',
		'Hampel\WordPress\Auth\WordPressAuthServiceProvider',
		'Hampel\WordPress\Hashing\WordPressHashServiceProvider',

    ),

The WordPressAuthServiceProvider is where the Auth service is extended with a new "wordpress" user provider.

The WordPressHashServiceProvider provides a new service "wordpress-hash" which hashes values using the same library that
WordPress uses.

The ValidateServiceProvider provides some additional tools we use to check data, while the UserServiceProvider gives us
a configurable user model which allows us to work easily with databases which don't conform to the standard naming
conventions of username and password for authentication fields.

Open your Laravel config file `app/config/auth.php` and set the driver to `wordpress` and the model to
`'Hampel\WordPress\Auth\WordPressUser'`:

    :::php
    'driver' => 'wordpress',

    'model' => 'Hampel\WordPress\Auth\Models\WordPressUser',

Alternatively, if you have a custom user model, you should have it extend `Hampel\WordPress\Auth\Models\WordPressUser`
and specify the name of your user model in the auth configuration file instead.

You should be able to leave the `table` set to `users` in the configuration file, which will correspond to the
`wp_users` table in your WordPress database, assuming the prefix for the database connection is set up `wp_` as per the
database configuration options below.

You must configure a database connection so the user model can find the WordPress tables. You can either use the default
connection or specify an additional connection for WordPress authentication.

To create a new database connection, edit or over-ride the settings in `app/config/database.php`. For example, to create
a new connection `mysql-wordpress`:

	:::php
	'mysql-wordpress' => array(
		'driver'    => 'mysql',
		'host'      => 'localhost',
		'database'  => 'wordpress',
		'username'  => '',
		'password'  => '',
		'charset'   => 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix'    => 'wp_',
	),

Make sure the table prefix is set to the same value specified in your WordPress `wp-config.php` file, which by default
would be:

	:::php
	$table_prefix  = 'wp_';

Even if you have your Laravel data in the same database as WordPress, if your WordPress uses a table prefix which is
different to your Laravel tables (which it probably is), you should specify a new database connection in Laravel as per
the above instructions, just so you can set the prefix.

Indeed, we recommend using two connections - the default connection for your application using whatever prefix you like
(or none at all), and a second custom connection for WordPress with a table prefix of `wp_` (or whatever the table
prefix in your `wp-config.php` file is). This allows you to keep the two sets of tables separated in your database and
minimises confusion or potential table name conflicts between WordPress and any WordPress plugins you use - and your
Laravel application.

Even if you don't have other tables for your Laravel application in your WordPress database, we suggest that you create
the two database connections as described, so that you can keep the migrations table separate if you are going to use
our migrations for creating the required additional tables for auth functions, as described below.

Next, if you haven't already implemented it, publish the Configurable User Model package configuration files using the
artisan command:

   :::bash
   $ php artisan user:config

(alternatively, you can use the command `php artisan config:publish hampel/user`)

Configure `app/config/packages/hampel/user/config.php`,

1. set __connection__ to the name of the database connection you previously set up for the user admin database
(for example: `mysql-wordpress`). If you set this to the value `'default'`, it will use the same database
connection as used by your main application.
2. set __id_field__ to `'ID'` (upper case is important!)
3. set __username_field__ to `'user_login'`
4. set __email_field__ to `'user_email'`
5. set __password_field__ to `'user_pass'`

These field names correspond to the names of the fields used by WordPress for authentication in the wp_users table.

For example:

    :::php
    'connection' => 'mysql-wordpress',
    'id_field' => 'ID',
    'username_field' => 'user_login',
    'email_field' => 'user_email',
    'password_field' => 'user_pass',

We will need to add some new database tables to the WordPress installation for certain auth related functions, such as
remember_tokens to make the "Remember Me" cookies work.

There are migrations provided to help set these tables up, enter the following command:

    :::bash
    $ php artisan migrate --package="hampel/wordpress-auth-laravel"

Note that if you want the migrations table (which manages the migration process) to use something other than the
default connection (eg you want the migrations table to be something like wp_migrations), you should specify the name
 of the connection as an option.

For example, to use the database connection named 'mysql-wordpress', use the following command:

    :::bash
    $ php artisan migrate --package="hampel/wordpress-auth-laravel --database="mysql-wordpress"

This will NOT change the connection used to install the actual auth-related tables - those tables will automatically
use the database connection specified in the configuration option `user::connection`.

The migrate:rollback and migrate:reset functions use the same options as above if you need to use them.

Usage
-----

Implement user authentication for your Laravel application as normal, following the instructions in
[http://laravel.com/docs/security](http://laravel.com/docs/security).

There is a `Hampel\WordPress\Auth\WordPressUser` model provided to replace the default `User` model supplied by Laravel.

The user data to be passed to the `Auth::attempt` function must use `user_login` for the username key to match the
corresponding column name in WordPress, however, the password must use the key 'password', regardless (the auth
functions will query the model to find the actual password field name). For example:

	:::php
	$userdata = array(
		'user_login' => Input::get('username'),
		'password' => Input::get('password')
	);

	if (Auth::attempt($userdata))
	{
		// successfully logged in
	}
	else
	{
		// authentication failed
	}

There are config values supplied for these column names (although they are unlikely to change if you prefer to hard-code
them), so you could also use something like:

	:::php
	$userdata = array(
		Config::get('user::username_field') => Input::get('username'),
		'password' => Input::get('password')
	);

Notes
-----

When using a non-default connection for authentication, attempting to validate authentication data using the Laravel
Validation service will fail. You will explicitly need to set the connection name for the validator to the one you
configured the User model to use.

The following example shows how you might do validation of username and password POSTed from a form. Note that we are
using the custom "auth" validation rule from the package
[hampel/validate-laravel-auth](https://bitbucket.org/hampel/validate-laravel-auth). This is optional and you could leave
out the "auth" rule completely if you choose. I wrote that package to help with validation of authentication data so
that on login forms you can easily return an error message showing that the password supplied is invalid and ask the
user to re-submit the form.

    :::php
    $username = Input::get('username'); // from our form
    $password = Input::get('password'); // from our form

    $user_table = Config::get('auth.table'); // from the Laravel auth configuration
    $connection = Config::get('user::connection'); // from the User configuration

    $username_field = Config::get('user::username_field'); // from the User configuration
    $password_field = Config::get('user::password_field'); // from the User configuration

	$userdata = array(
		'username' => $username,
		'password' => $password
	);

    // Declare the rules for the form validation.
    $rules = array(
    	'username'  => array('required', "exists:{$user_table},{$username_field}"),
    	'password'  => array('required', "auth:{$username_field},{$username}")
    );

    $validator = Validator::make($userdata, $rules); // create our validator
    $validator->getPresenceVerifier()->setConnection($connection); // <---- THIS IS THE MISSING MAGIC for when we are using a non-default connection

    // Check if the form validates with success.
    if ($validator->passes())
    {
		$credentials = array(
			$username_field => $username,
			'password' => $password
		);

    	if (Auth::attempt($credentials))
    	{
    		dd("auth successful");
    	}
    	else
    	{
    		dd("auth failed");
    	}
    }
    dd("validation failed");

Todo
----

* Could do with some more unit tests
* Password reminders - should we do them or leave it to WordPress?
* Facade for wordpress-hash service
* Might be useful to expose user-meta from WordPress
* While we're at it, how about exposing WordPress roles too?