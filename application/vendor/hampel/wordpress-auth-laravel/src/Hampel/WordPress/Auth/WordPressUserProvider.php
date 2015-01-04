<?php namespace Hampel\WordPress\Auth;

use Illuminate\Auth\EloquentUserProvider;
use Hampel\WordPress\Auth\Models\RememberToken;

class WordPressUserProvider extends EloquentUserProvider {

	/**
	 * Retrieve a user by by their unique identifier and "remember me" token.
	 *
	 * @param  mixed  $identifier
	 * @param  string  $token
	 * @return \Illuminate\Auth\UserInterface|null
	 */
	public function retrieveByToken($identifier, $token)
	{
		$model = new RememberToken;

		$token = $model->newQuery()
			->where($model->getKeyName(), $identifier)
			->where($model->getRememberTokenName(), $token)
			->first();

		if (!is_null($token)) return $token->user;
	}

}

?>
