<?php
/**
 * Configuration for Validator
 */

return array(

	/*
	|--------------------------------------------------------------------------
	| Use Live Data for TLD checks
	|--------------------------------------------------------------------------
	|
	| Set to true to use live data from tld_path, potentially retrieved online
	| gives the most up-to-date information on new TLDs, but takes longer due
	| to network activity.
	|
	| Set to false to use the supplied local TLD file, which is much faster,
	| but may not contain the latest TLDs.
	|
	| Default: false
	|
	*/

	'tld_live' => false,

	/*
	|--------------------------------------------------------------------------
	| TLD Path
	|--------------------------------------------------------------------------
	|
	| Specify the path or URL to retrieve a list of TLDs for use in domain/TLD
	| verification.
	|
	| Path will be passed to file_get_contents, so any valid path or URL may be
	| used.
	|
	| File format is assumed to be:
	| - one TLD per line
	| - either upper or lower case
	| - lines beginning with # are ignored
	| - internationalized domains allowed using punycode notation
	|
	| Default: 'http://data.iana.org/TLD/tlds-alpha-by-domain.txt'
	|
	*/

	'tld_path' => 'http://data.iana.org/TLD/tlds-alpha-by-domain.txt',

	/*
	|--------------------------------------------------------------------------
	| Cache Expiry
	|--------------------------------------------------------------------------
	|
	| How long should the application cache TLD data - in minutes
	| Default: 1440 minutes = 1 day
	|
	*/

	'cache_expiry' => 1440,

	/*
	|--------------------------------------------------------------------------
	| Cache Keys
	|--------------------------------------------------------------------------
	|
	| Key to cache TLD information, only need to change this in the case of
	| conflicts with other packages or code
	|
	| Default: 'tlds'
	|
	*/

	'cache_key' => 'tlds',

);

?>
