<?php
/**
 * 
 */

use Illuminate\Support\Facades\Config;

if (!function_exists('wpuser_id_field'))
{
	function wpuser_id_field()
	{
		return user_id_field();
	}
}

if (!function_exists('wpuser_login_field'))
{
	function wpuser_login_field()
	{
		return user_username_field();
	}
}

if (!function_exists('wpuser_username_field'))
{
	function wpuser_username_field()
	{
		return user_username_field();
	}
}

if (!function_exists('wpuser_password_field'))
{
	function wpuser_password_field()
	{
		return user_password_field();
	}
}

if (!function_exists('wpuser_nicename_field'))
{
	function wpuser_nicename_field()
	{
		return Config::get('wordpress-auth-laravel::database.nicename_field', '');
	}
}

if (!function_exists('wpuser_email_field'))
{
	function wpuser_email_field()
	{
		return user_email_field();
	}
}

if (!function_exists('wpuser_url_field'))
{
	function wpuser_url_field()
	{
		return Config::get('wordpress-auth-laravel::database.url_field', '');
	}
}

if (!function_exists('wpuser_registered_field'))
{
	function wpuser_registered_field()
	{
		return Config::get('wordpress-auth-laravel::database.registered_field', '');
	}
}

if (!function_exists('wpuser_activation_key_field'))
{
	function wpuser_activation_key_field()
	{
		return Config::get('wordpress-auth-laravel::database.activation_key_field', '');
	}
}

if (!function_exists('wpuser_status_field'))
{
	function wpuser_status_field()
	{
		return Config::get('wordpress-auth-laravel::database.status_field', '');
	}
}

if (!function_exists('wpuser_display_name_field'))
{
	function wpuser_display_name_field()
	{
		return Config::get('wordpress-auth-laravel::database.display_name_field', '');
	}
}

if (!function_exists('wpuser_remember_token_table'))
{
	function wpuser_remember_token_table()
	{
		return Config::get('wordpress-auth-laravel::database.remember_token_table', '');
	}
}


?>
