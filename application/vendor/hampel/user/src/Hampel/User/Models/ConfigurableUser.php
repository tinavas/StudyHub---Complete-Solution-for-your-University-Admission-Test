<?php namespace Hampel\User\Models;

use Illuminate\Support\Facades\Hash;

class ConfigurableUser extends BaseUser {

	public function __construct(array $attributes = array())
	{
		$this->setConnection(user_connection_name());

		$this->setTable(user_table());

		$this->setHidden(array(user_password_field(), user_remember_token_field()));

		parent::__construct($attributes);
	}

	public function getIdAttribute()
	{
		return $this->getAttributeFromArray(user_id_field());
	}

	public function setIdAttribute($value)
	{
		$id_field = user_id_field();

		$this->attributes[$id_field] = $value;
	}

	public function getPasswordAttribute()
	{
		return $this->getAttributeFromArray(user_password_field());
	}

	public function setPasswordAttribute($value)
	{
		$password_field = user_password_field();

		$this->attributes[$password_field] = Hash::make($value);
	}

	public function getUsernameAttribute()
	{
		return $this->getAttributeFromArray(user_username_field());
	}

	public function setUsernameAttribute($value)
	{
		$username_field = user_username_field();

		$this->attributes[$username_field] = $value;
	}

	public function getEmailAttribute()
	{
		return $this->getAttributeFromArray(user_email_field());
	}

	public function setEmailAttribute($value)
	{
		$email_field = user_email_field();

		$this->attributes[$email_field] = $value;
	}

	public function getRememberTokenAttribute()
	{
		return $this->getAttributeFromArray(user_remember_token_field());
	}

	public function setRememberTokenAttribute($value)
	{
		$remember_token_field = user_remember_token_field();

		$this->attributes[$remember_token_field] = $value;
	}

}