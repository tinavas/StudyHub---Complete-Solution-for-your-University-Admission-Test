Hampel Laravel Validator
========================

Custom Validators for Laravel 4

By [Simon Hampel](http://hampelgroup.com/).

Installation
------------

The recommended way of installing Hampel Laravel Validator is through [Composer](http://getcomposer.org):

Require the package via Composer in your `composer.json`

    {
        "require": {
            "hampel/validate-laravel": "~1.6"
        }
    }

Run Composer to update the new requirement.

    $ composer update

The package is built to work with the Laravel 4 Framework.

Open your Laravel config file `config/app.php` and add the service provider in the `$providers` array:

    "providers" => array(

        ...

        "Hampel\Validate\Laravel\ValidateServiceProvider"

    ),

*Note:* as of v1.6, the behaviour of the `domain` and `tld` validation routines has changed such that it will use the
locally stored list of TLDs in preference to the remote list from IANA by default. This is done for performance reasons.
You can override this behaviour by changing the configuration options - see below for more information.

Usage
-----

This package adds additional validators for Laravel 4 - refer to
[Laravel Documentation - Validation](http://laravel.com/docs/validation) for general usage instructions.

**unique_or_zero:_table,column,except,idColumn_**

The field under validation must be unique on a given database table, but may also be zero. If the `column` option is not
specified, the field name will be used.

Refer to usage instructions for `unique` for more information.

**exists_or_zero:_table,column_**

The field under validation must exist on a given database table, but may also be zero. If the `column` option is not
specified, the field name will be used.

Refer to usage instructions for `exists` for more information.

__bool__

The field under validation must be the equivalent of a "boolean" (either `true` or `false`) in a variety of forms.
Acceptable values include: "1", "true", "on" and "yes", "0", "false", "off", "no", "", and NULL

**ip_public**

The field under validation must be a public IP address - ie. not in the "private" or "reserved" ranges.

__domain__

The field under validation must be a valid domain name. The Top Level Domain (TLD) is checked against a list of all
acceptable TLDs, including internationalised domains in punycode notation

**domain_in:_com,net,..._**

The field under validation must be a valid domain with a TLD from one of the specified options

__tld__

The field under validation must end in a valid Top Level Domain (TLD). The TLD is checked against a list of all
acceptable TLDs, including internationalised domains in punycode notation

If no dots are contained in the supplied value, it will be assumed to be only a TLD.

If the value contains dots, only the part after the last dot will be validated.

**tld_in:_com,net,..._**

The field under validation must end in a TLD from one of the specified options

If no dots are contained in the supplied value, it will be assumed to be only a TLD.

If the value contains dots, only the part after the last dot will be validated.

**uploaded_file**

The field under validation must be an uploaded file of type `Symfony\Component\HttpFoundation\File\UploadedFile`, as
returned from `Input::file()`. The file upload must also be valid, that is, the upload must have succeeded with an error
return of `UPLOAD_ERR_OK`
(see [File Upload Error Messages Explained](http://php.net/manual/en/features.file-upload.errors.php) for more details
on file upload errors)

Configuration
-------------

The configuration options provided by the package allow you to modify the behaviour to suit your needs.

Over-ride the defaults by creating a config file `app/config/packages/hampel/validate-laravel/config.php`
or `app/config/packages/hampel/validate-laravel/<environment>/config.php` to override for a specific application
environment.

__tld_live__

Specify `true` to use live data from the IANA website (ie the URL specified by the `tld_path` configuration option), in
preference to locally stored data. This ensures the most up-to-date data is used, at the cost of a slight performance
hit for the first request - the data is cached for future requests.

Default: false

__tld_path__

Specify the path or URL to the IANA list of Top Level Domains (TLD) which we can then optionally use to validate domain
names against

Default: http://data.iana.org/TLD/tlds-alpha-by-domain.txt

**cache_expiry**

TLD data retrieved from the IANA website (or from the local filesystem) is cached. This setting determines the length of
time it is cached for.

Default: 1440 (1 day)

**cache_key**

The key used to cache data retrieved from IANA

Default: tlds
