<?php namespace Hampel\WordPress\Auth\Models;
/**
 * 
 */

use Eloquent;

class RememberToken extends Eloquent
{
	// over-ride the primary key
	protected $primaryKey = 'user_ID';

	// disable auto-timestamps
	public $timestamps = false;

	// constructor
	public function __construct(array $attributes = array())
	{
		$this->setConnection(user_connection_name()); // use the same connection that the user model uses

		$this->setTable(wpuser_remember_token_table());

		parent::__construct($attributes);
	}

	// define the inverse relationship for our model
	public function user()
    {
        return $this->belongsTo('Hampel\WordPress\Auth\Models\WordPressUser', $this->getKeyName());
    }

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{
		return 'remember_token';
	}

}

?>
 