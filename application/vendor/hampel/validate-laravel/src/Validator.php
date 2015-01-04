<?php namespace Hampel\Validate\Laravel;
/**
 * 
 */

use Symfony\Component\HttpFoundation\File\UploadedFile;

class Validator extends \Illuminate\Validation\Validator
{
	public function validateUniqueOrZero($attribute, $value, $parameters)
	{
		if ($value == 0) return true;

		return $this->validateUnique($attribute, $value, $parameters);
	}

	public function validateExistsOrZero($attribute, $value, $parameters)
	{
		if ($value == 0) return true;

		return $this->validateExists($attribute, $value, $parameters);
	}

	public function validateBool($attribute, $value, $parameters)
	{
		$validator = $this->container->make('validate-laravel.validator');

		return $validator->isBool($value);
	}

	public function validateIpv4Public($attribute, $value, $parameters)
	{
		$validator = $this->container->make('validate-laravel.validator');

		return $validator->isPublicIpv4($value);
	}

	public function validateIpv6Public($attribute, $value, $parameters)
	{
		$validator = $this->container->make('validate-laravel.validator');

		return $validator->isPublicIpv6($value);
	}

	public function validateIpPublic($attribute, $value, $parameters)
	{
		$validator = $this->container->make('validate-laravel.validator');

		return $validator->isPublicIp($value);
	}

	public function validateDomain($attribute, $value, $parameters)
	{
		$validator = $this->container->make('validate-laravel.validator');

		if ($this->container['config']->get('validate-laravel::tld_live'))
		{
			// use live data
			$tlds = $this->container->make('validate-laravel.tlds')->getTlds();
		}
		else
		{
			// use local data
			$tlds = $validator->getTlds(true);
		}

		return $validator->isDomain($value, $tlds);
	}

	public function validateDomainIn($attribute, $value, $parameters)
	{
		$validator = $this->container->make('validate-laravel.validator');

		return $validator->isDomain($value, $parameters);
	}

	protected function replaceDomainIn($message, $attribute, $rule, $parameters)
	{
		return str_replace(':values', implode(', ', $parameters), $message);
	}

	public function validateTld($attribute, $value, $parameters)
	{
		$validator = $this->container->make('validate-laravel.validator');

		if ($this->container['config']->get('validate-laravel::tld_live'))
		{
			// use live data
			$tlds = $this->container->make('validate-laravel.tlds')->getTlds();
		}
		else
		{
			// use local data
			$tlds = $validator->getTlds(true);
		}

		return $validator->isTld($value, $tlds);
	}

	public function validateTldIn($attribute, $value, $parameters)
	{
		$validator = $this->container->make('validate-laravel.validator');

		return $validator->isTld($value, $parameters);
	}

	protected function replaceTldIn($message, $attribute, $rule, $parameters)
	{
		return str_replace(':values', implode(', ', $parameters), $message);
	}

	protected function validateUploadedFile($attribute, $value, $parameters)
	{
		return ($value instanceof UploadedFile AND $value->isValid());
	}
}

?>
