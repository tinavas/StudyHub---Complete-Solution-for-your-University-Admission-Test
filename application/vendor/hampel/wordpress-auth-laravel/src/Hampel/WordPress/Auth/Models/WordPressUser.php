<?php namespace Hampel\WordPress\Auth\Models;

use Illuminate\Database\Eloquent\Collection;
use Hampel\User\Models\ConfigurableUser;

class WordPressUser extends ConfigurableUser {

	// disable auto-timestamps
	public $timestamps = false;

	public function rememberToken()
    {
        return $this->hasOne('Hampel\WordPress\Auth\Models\RememberToken', 'user_ID');
    }

	// over-ride the remember_token attribute from Configurable User
	public function getRememberTokenAttribute()
	{
		$remember_token_field = $this->getRememberTokenName();

		if (array_key_exists($remember_token_field, $this->relations))
		{
			$relation = $this->getRelation($remember_token_field);

			if (!is_null($relation)) return $relation->getAttribute($remember_token_field);
		}

		$camelKey = camel_case($remember_token_field);

		if (method_exists($this, $camelKey))
		{
			$relation =  $this->getRelationshipFromMethod($remember_token_field, $camelKey);

			if (!is_null($relation)) return $relation->getAttribute($remember_token_field);
		}
	}

	public function setRememberTokenAttribute($value)
	{
		$remember_token_field = $this->getRememberTokenName();

		$token = $this->rememberToken()->getResults();
		if (is_null($token))
		{
			$token = new RememberToken();
		}

		$token->setAttribute($this->getRememberTokenName(), $value);

		// if we have a key on our user already, set it on the token as well
		$key = $this->getKey();
		if (! is_null($key))
		{
			$token->setAttribute($token->getKeyName(), $key);
		}

		$this->setRelation($this->getRememberTokenName(), $token);
	}

	//over-ride the save function so that it also pushes RememberToken models
	public function save(array $options = array())
	{
		// start by doing an actual save, bail if that failed
		if (! parent::save($options)) return false;

		$primaryKey = $this->getKey();

		// now do a "push" to make sure our relations are also saved
		foreach ($this->relations as $models)
		{
			foreach (Collection::make($models) as $model)
			{
				if (! $model instanceof RememberToken) continue;
				$model->setAttribute($model->getKeyName(), $primaryKey);
				if ( ! $model->push()) return false;
			}
		}

		return true;
	}

	// some helper functions
	public function getNicenameAttribute()
	{
		return $this->getAttributeFromArray(wpuser_nicename_field());
	}

	public function setNicenameAttribute($value)
	{
		$nicename_field = wpuser_nicename_field();

		$this->attributes[$nicename_field] = $value;
	}

	public function getUrlAttribute()
	{
		return $this->getAttributeFromArray(wpuser_url_field());
	}

	public function setUrlAttribute($value)
	{
		$url_field = wpuser_url_field();

		$this->attributes[$url_field] = $value;
	}

	public function getRegisteredAttribute()
	{
		return $this->getAttributeFromArray(wpuser_registered_field());
	}

	public function setRegisteredAttribute($value)
	{
		$registered_field = wpuser_registered_field();

		$this->attributes[$registered_field] = $value;
	}

	public function getActivationKeyAttribute()
	{
		return $this->getAttributeFromArray(wpuser_activation_key_field());
	}

	public function setActivationKeyAttribute($value)
	{
		$activation_key_field = wpuser_activation_key_field();

		$this->attributes[$activation_key_field] = $value;
	}

	public function getStatusAttribute()
	{
		return $this->getAttributeFromArray(wpuser_status_field());
	}

	public function setStatusAttribute($value)
	{
		$status_field = wpuser_status_field();

		$this->attributes[$status_field] = $value;
	}

}