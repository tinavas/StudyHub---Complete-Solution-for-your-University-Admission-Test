<?php
/**
 * Configuration for WordPress Database
 */

return array(

	/*
	|--------------------------------------------------------------------------
	| Table name for remember_tokens
	|--------------------------------------------------------------------------
	|
	| To avoid adding custom columns to the WordPress users table, we will use
	| a separate table to hold remember_tokens. Specify the table name here.
	|
	| Default value: 'laravel_remember_token'
	|
	*/

	'remember_token_table' => 'laravel_remember_token',

	/*
	|--------------------------------------------------------------------------
	| Nicename field name for users table
	|--------------------------------------------------------------------------
	|
	| The name of the field which stores the nicename
	|
	| Default value: 'user_nicename'
	|
	*/

	'nicename_field' => 'user_nicename',

	/*
	|--------------------------------------------------------------------------
	| Url field name for users table
	|--------------------------------------------------------------------------
	|
	| The name of the field which stores the url
	|
	| Default value: 'user_url'
	|
	*/

	'url_field' => 'user_url',

	/*
	|--------------------------------------------------------------------------
	| Registered field name for users table
	|--------------------------------------------------------------------------
	|
	| The name of the field which stores the registered date
	|
	| Default value: 'user_registered'
	|
	*/

	'registered_field' => 'user_registered',

	/*
	|--------------------------------------------------------------------------
	| Activation Key field name for users table
	|--------------------------------------------------------------------------
	|
	| The name of the field which stores the activation key
	|
	| Default value: 'user_activation_key'
	|
	*/

	'activation_key_field' => 'user_activation_key',

	/*
	|--------------------------------------------------------------------------
	| Status field name for users table
	|--------------------------------------------------------------------------
	|
	| The name of the field which stores the status
	|
	| Default value: 'user_status'
	|
	*/

	'status_field' => 'user_status',

	/*
	|--------------------------------------------------------------------------
	| Display name field name for users table
	|--------------------------------------------------------------------------
	|
	| The name of the field which stores the display name
	|
	| Default value: 'display_name'
	|
	*/

	'display_name_field' => 'display_name',

);

?>
