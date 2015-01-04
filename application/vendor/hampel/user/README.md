Configurable User Model for Laravel
===================================

A configurable base user model for use in Laravel projects.

Allows you to abstract the implementation details of the database so that database fields other than "password",
"email", etc, can be used - while still using these default field names to access and set model attributes.
Allows database implementation changes without recoding the user model.

Because there is a strong linkage between the database structure and your code when using Eloquent, it can be
problematic for situations where you use non-standard fields for usernames, passwords and such.

For example, WordPress uses field names of user_login and user_pass for authentication, so if your project needs to
authenticate against a WordPress database, you find yourself hard-coding these field-names in your application.

When you consider the traits introduced in the default user object in Laravel 4.2, you can see that they expect the
username and password fields to be called ... username and password! Of course, there is nothing stopping you from
creating your own base user object - but it would be nice to just be able to use the traits - code reuse and all that.

This package provides a simple configurable user model as a base for your own projects. It is based on the example user
model provided by Laravel, and provides configuration options for defining the field names for username, password, email
and remember_token as well as the connection name for the database used by the model.

By [Simon Hampel](http://hampelgroup.com/).

Versions
--------

Functionality is identical between versions 1.x and 2.x - version 2.x simply changes the base model to use traits and
thus is compatible only with Laravel framework version 4.2 (and PHP 5.4) and higher.

Installation
------------

The recommended way of installing the Configurable User Model is through [Composer](http://getcomposer.org):

Require the package via Composer in your `composer.json`.

For Laravel version 4.1

	:::json
    {
        "require": {
            "hampel/user": "1.*"
        }
    }

For Laravel version 4.2

	:::json
    {
        "require": {
            "hampel/user": "2.*"
        }
    }

Run Composer to update the new requirement.

	:::bash
    $ composer update

The package is built to work with the Laravel 4 Framework.

Configuration
-------------

Open your Laravel config file `app/config/app.php` and add the following service providers in the `$providers` array,
if they don't already exist:

	:::php
    "providers" => array(

        ...

		'Hampel\Validate\Laravel\ValidateServiceProvider',
		'Hampel\User\UserServiceProvider',

    ),

When using this model for authentication, you should also change the configuration for `app/config/auth.php`,

1. change __model__ to `'Hampel\User\Models\ConfigurableUser'`, or if you have extended this model, specify the fully
qualified name of your own model instead.
2. change __table__ to the name of the table which contains your user data, if necessary. Note that if the database
connection you are using for authentication specifies a table prefix you should NOT include the prefix in the table
name.

Next, publish the User Admin configuration using the command:

    :::bash
    $ php artisan user:config

(alternatively, you can use the command `php artisan config:publish hampel/user`)

Configure `app/config/packages/hampel/user/config.php`,

1. set __connection__ to the name of the database connection you previously set up for the user admin database. If you
set this to the value `'default'`, it will use the same database connection as used by your main application.
2. if using a custom user table, you may specify field names for the key username, email and password fields

Usage
-----

The ConfigurableUser model is based on Eloquent, so you can do the things you normally would do with any Eloquent model.

The magic with this model is that you can use the properties 'username', 'password', 'email', and 'remember_token', even
if the actual fields in the database are different.

Let's take the WordPress example, the relevant fields are 'user_login', 'user_pass' and 'user_email' respectively. A
trick to consider is that while database column names are not case sensitive, PHP array keys are. So given that
attributes in models are stored in an associative array, a column name of id is actually different to ID. Since
WordPress uses an primary key column name of ID, we must cater for that change as well.

So, we adjust the configuration file as follows:

    :::php
    'id_field' => 'ID',
    'username_field' => 'user_login',
    'email_field' => 'user_email',
    'password_field' => 'user_pass',

Now we can just use our model as normal, using attributes 'username', 'email' and 'password' without needing to worry
about the actual database fields:

    :::php
    $user = new ConfigurableUser();
    $user->username = 'joe'; // note we just use username and not user_login
    $user->email = 'joe@example.com'; // again, we are using email and not user_email
    $user->password = 'password'; // the model automatically hashes passwords for us
    $user->save(); // the data will be stored in the database using the associated field names we configured

There is a slight trick with authentication - the auth routines actually do a direct database compare using the
credential information we pass in, so we'll need to pass in the configured username field. Just to confuse matters,
we must specify the password field as 'password', regardless of what the actual password column name is - the auth
routines will use the model functions to get the password, so things will just work behind the scenes regardless.

    // for another example, let's authenticate using the data passed from a form
    $username = Input::get('username');
    $password = Input::get('password');

    $username_field = Config::get('user::username_field');
    $password_field = Config::get('user::password_field'); // we don't actually use this here!

    $credentials = array(
    	$username_field => $username,
    	'password' => $password, // we must specify the key as 'password' !!
    );

    if (Auth::attempt($credentials))
    {
    	dd('logged in successfully');
    }
    else
    {
    	dd('login failed');
    }

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
		'username' => $username, // the 'username' key corresponds to our form field name
		'password' => $password // the 'password' key corresponds to our form field name
	);

    // Declare the rules for the form validation.
    $rules = array(
    	'username'  => array('required', "exists:{$user_table},{$username_field}"), // key must match that used in $userdata
    	'password'  => array('required', "auth:{$username_field},{$username}") // key must match that used in $userdata
    );

    $validator = Validator::make($userdata, $rules); // create our validator
    $validator->getPresenceVerifier()->setConnection($connection); // <---- THIS IS THE MISSING MAGIC for when we are using a non-default connection

    // Check if the form validates with success.
    if ($validator->passes())
    {
		$credentials = array(
			$username_field => $username,
			'password' => $password // password key must be 'password'
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
