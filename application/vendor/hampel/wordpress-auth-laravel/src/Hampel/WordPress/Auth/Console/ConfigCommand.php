<?php namespace Hampel\WordPress\Auth\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class ConfigCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'wordpress-auth:config';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Publish wordpress-auth-laravel configuration';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		$this->call('config:publish', array('package' => 'hampel/wordpress-auth-laravel'));
	}

}