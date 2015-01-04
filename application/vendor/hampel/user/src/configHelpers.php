<?php
/**
 * 
 */

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

if (!function_exists('user_credential_field'))
{
	function user_credential_field($username)
	{
		if (user_is_email($username))
		{
			return user_email_field();
		}
		else
		{
			return user_username_field();
		}
	}
}

if (!function_exists('user_is_email'))
{
	function user_is_email($value)
	{
		return App::make('validate-laravel.validator')->isEmail($value);
	}
}

if (!function_exists('user_id_field'))
{
	function user_id_field()
	{
		return Config::get('user::id_field', '');
	}
}

if (!function_exists('user_username_field'))
{
	function user_username_field()
	{
		return Config::get('user::username_field', '');
	}
}

if (!function_exists('user_email_field'))
{
	function user_email_field()
	{
		return Config::get('user::email_field', '');
	}
}

if (!function_exists('user_password_field'))
{
	function user_password_field()
	{
		return Config::get('user::password_field', '');
	}
}

if (!function_exists('user_remember_token_field'))
{
	function user_remember_token_field()
	{
		return Config::get('user::remember_token_field', '');
	}
}

if (!function_exists('user_connection_name'))
{
	function user_connection_name()
	{
		return Config::get('user::connection', '');
	}
}

if (!function_exists('user_table'))
{
	function user_table()
	{
		return Config::get('auth.table', '');
	}
}

if (!function_exists('user_model'))
{
	function user_model()
	{
		return Config::get('auth.model', '');
	}
}

?>
