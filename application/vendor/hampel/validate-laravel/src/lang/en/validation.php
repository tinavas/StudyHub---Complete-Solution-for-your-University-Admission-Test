<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| our custom validator class. Some of these rules have multiple versions such
	| such as the size rules. Feel free to tweak each of these messages.
	|
	*/

	'unique_or_zero'   => ":attribute already exists",

	'exists_or_zero'   => ":attribute not found",

	'bool' => ":attribute must be a boolean equivalent",

	'ipv4_public' => ":attribute must be a valid public IPv4 address",

	'ipv6_public' => ":attribute must be a valid public IPv6 address",

	'ip_public' => ":attribute must be a valid public IP address",

	'domain' => ":attribute must be a valid domain name",

	'domain_in' => ":attribute TLD must be one of :values",

	'tld' => ":attribute must have a valid top-level-domain (TLD)",

	'tld_in' => ":attribute must end in one of :values",

	'uploaded_file' => 'file upload did not succeed',
);
