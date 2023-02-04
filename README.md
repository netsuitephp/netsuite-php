# NetSuite PHP API Client

 [![License](https://img.shields.io/packagist/l/ryanwinchester/netsuite-php.svg?style=flat-square)](https://packagist.org/packages/ryanwinchester/netsuite-php)
  [![Packagist](https://img.shields.io/packagist/dt/ryanwinchester/netsuite-php.svg?maxAge=2592000)]()

A PHP API client package for NetSuite, pried from the
[NetSuite PHP Toolkit](http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml)
and made more consumable for modern PHP application development. All of the
classes in the `NetSuite\Classes` namespace are code provided by NetSuite
with a [license](#license) allowing redistribution. The custom work provided
by this library separates these nearly 2,000 classes out into their own files
and allows the classes to be installed with composer and accessed using
standard autoloading support. It allows configuration to be read from the
environment, adds support to log requests and responses and provides a
simplified client wrapper class (`NetSuiteService`).

* [Installation](#installation)
* [Quickstart](#quickstart)
  * [w/Laravel](#laravel-integration)
* [Account-Specific Data Center URLs](#Account-Specific-Data-Center-URLs)
* [Examples](#examples)
* [Logging](#logging)
* [Generating Classes](#generating-classes)
* [Roadmap](#roadmap)
* [Support](#support)
* [Contributing](#contributing)
* [License](#license)

## Installation

Require with composer:

```
composer require ryanwinchester/netsuite-php
```

## Quickstart:

#### Instantiating the NetSuiteService class:

Any of the examples herein will assume you have already instantiated a client
object using token-based authentication. The method of authenticating with
user credentials was dropped from support by NetSuite in 2020.

```php
// Token-based Authentication
require 'vendor/autoload.php';

use NetSuite\NetSuiteService;

$config = [
    // required -------------------------------------
    "endpoint"       => "2021_1",
    "host"           => "https://webservices.netsuite.com",
    "account"        => "MYACCT1",
    "consumerKey"    => "0123456789ABCDEF",
    "consumerSecret" => "0123456789ABCDEF",
    "token"          => "0123456789ABCDEF",
    "tokenSecret"    => "0123456789ABCDEF",
    // optional -------------------------------------
    "signatureAlgorithm" => 'sha256', // Defaults to 'sha256'
    "logging"  => true,
    "log_path" => "/var/www/myapp/logs/netsuite",
    "log_format"     => "netsuite-php-%date-%operation",
    "log_dateformat" => "Ymd.His.u",
];
$service = new NetSuiteService($config);
```
You can alternatively place your config in environment variables. This is
helpful in hosted environments where deployment of config files is either
not desired or practical. You can find the valid keys in the included
`.env.example` file with sample values.

Previously, instantiating the NetSuiteClient with ENV data entailed using the
static method `createFromEnv`. This method is now marked as `deprecated` and
if you are using it, please change your code to use the standard constructor
which will extract your configuration out of the $_ENV superglobal for you.

```php
// Allowing the client to infer configuration from $_ENV
require 'vendor/autoload.php';

use NetSuite\NetSuiteService;

$service = new NetSuiteService();
```

### Laravel Integration

If you're implementing NetSuite web services in a
[Laravel](https://laravel.com) application, you might want to look at the
[netsuite-laravel](https://github.com/netsuitephp/netsuite-laravel) package
to streamline instantiating and making the client available to your app
via the service container. In that case, you'll simply need to require the
`netsuitephp/netsuite-laravel` package in your application and then as long
as the client configuration is present in the application's environment,
you'll have a client instance in the container.


## Account-Specific Data Center URLs

With `2021_1`, this library provides support to utilize NetSuite's new
account-specific data center URL detection on each request. In practice, this
lookup does have a measurable overhead cost. As such, I'd suggest using this
feature only if your manner of NetSuite integration is such that you make
fewer connections, handling integration in batches. If your manner of
integration is to instead make many frequent, brief requests from NetSuite,
then you will probably prefer to provide your data center URL explicitly and
remove the lookup from every session.

```php
// Recommended: Use your own defined data center URL (or sandbox, for instance):
$config['host'] = 'https://123456789.suitetalk.api.netsuite.com';

// To allow the service to get the correct URL for your account on the fly,
// use the legacy webservices url.
$config['host'] = 'https://webservices.netsuite.com';
```

## Examples

See [EXAMPLES.md](EXAMPLES.md)

## Logging

The most common way to enable logging will be to do so at the configuration
level, see the [quickstart](#quickstart) examples.

You can also set logging on or off during runtime with methods. Note that
if you don't specify a logging directory in the config or at runtime, then
no logs will be created. There must be a valid target location.

```php
// Set a logging path
$service->setLogPath('/path/to/logs');

// Turn logging on
$service->logRequests(true);  // Turn logging on.

// Turn logging off
$service->logRequests(false); // Turn logging off.
```

If you require more flexibility in relation to logging, you can provide your
own PSR-3 compatible logger (as of `2023.1.0`).

## Generating Classes

This repository always contains classes generated from the version of the
NetSuite PHP Toolkit corresponding with the web services version denoted
by the specific release. Release `v2021.1.0`, for instance, is the first
release built against NetSuite's `2021_1` web services toolkit. If you want
to generate the class files yourself, for whatever reason, there is code
included with the package to do so, using the following steps:

* Download the
[NetSuite PHP Toolkit](http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml)
* Unzip the contents into the `./original/` folder
* Run `./utilities/separate_classes.php` or `composer generate`

## Roadmap

#### PHP Version Support

See: https://www.php.net/supported-versions.php

With official support for PHP5 gone since the end of 2018 and with PHP7
moving to security-only by the end of 2021, the versions of PHP supported
by this package will start to be gradually moved forward.

For the time being, expect the following for `netsuitephp/netsuite-php`:

* require `"php": ">=7.1"` as of the `2021_1` build
* require `"php": ">=8"` as of the `2023_1` build

**This will apply only to new releases of the package, so you will still be
able to continue using the last supported version for your PHP release if
you can't or won't update PHP.**

## Support

If you need help with implementation, see the
[resources section](EXAMPLES.md#resources) of the examples file for some
useful links.

If you believe that your issue is a bug specific to the custom work provided
by this package (and not NetSuite's own classes that are packaged therein),
then you can file an issue in github. Per the issue template, please include
a clear description of the problem, how it is reproduced and the logs of
relevant requests/responses using the logging features of this package.

## Contributing

Contributions are welcome in the form of pull requests. Please include a clear
explanation of the reason for the change and try to keep changes as small as
possible, which will increase the speed with which we can get them reviewed
and the likelihood of being included into the master branch.

* Make sure to respect the current required `php` version in `composer.json`
* Avoid introducing new dependencies (no framework hooks, etc)
* Please try to make all additions comply with
[PSR-12](https://www.php-fig.org/psr/psr-12/)


## License

[Original work](http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml) is Copyright &copy; 2010-2015 NetSuite Inc. and provided "as is." Refer to the [NetSuite Toolkit License Agreement](original/NetSuite%20Application%20Developer%20License%20Agreement.txt) file.

All additional work is licensed under the **Apache 2.0** open source software license according to the included [LICENSE](LICENSE.txt) file.
