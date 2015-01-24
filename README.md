# Netsuite PHP Toolkit - Package

[![Latest Stable Version](https://poser.pugx.org/fungku/netsuite-php-toolkit/v/stable.svg)](https://packagist.org/packages/fungku/netsuite-php-toolkit) [![Total Downloads](https://poser.pugx.org/fungku/netsuite-php-toolkit/downloads.svg)](https://packagist.org/packages/fungku/netsuite-php-toolkit) [![Latest Unstable Version](https://poser.pugx.org/fungku/netsuite-php-toolkit/v/unstable.svg)](https://packagist.org/packages/fungku/netsuite-php-toolkit) [![License](https://poser.pugx.org/fungku/netsuite-php-toolkit/license.svg)](https://packagist.org/packages/fungku/netsuite-php-toolkit)

Netsuite PHP Toolkit worked into a composer package.

You can now pass the configuration to the constructor or set environment variables to instantiate the service class.

Also, the classes have been extracted for PSR autoloading, and for better IDE integration. As well as just making
it easier to scan and see what is available.

## Adding it to your project:

```
composer require "fungku/netsuite-php-toolkit:~1.0"
```

## Examples:

#### Retreiving a customer record:

```php
$config = array(
   "endpoint"  => "2014_2",
    "host"     => "https://webservices.netsuite.com",
    "email"    => "jDoe@netsuite.com",
    "password" => "mySecretPwd",
    "role"     => "3",
    "account"  => "MYACCT1",
);

$service = new NetSuiteService($config);

$request = new GetRequest();
$request->baseRef = new RecordRef();
$request->baseRef->internalId = "123";
$request->baseRef->type = "customer";
$getResponse = $service->get($request);

if ( ! $getResponse->readResponse->status->isSuccess) {
    echo "GET ERROR";
} else {
    $customer = $getResponse->readResponse->record;
}
```

You can optionally avoid passing configuration array to the constructor by setting the following environment variables:
```
NETSUITE_ENDPOINT=2014_2
NETSUITE_HOST=https://webservices.netsuite.com
NETSUITE_EMAIL=jDoe@netsuite.com
NETSUITE_PASSWORD=mySecretPwd
NETSUITE_ROLE=3
NETSUITE_ACCOUNT=MYACCT1
```

## Status

(:ballot_box_with_check: Complete, :wavy_dash: In Progress, :white_medium_small_square: Todo)

:ballot_box_with_check: Extract the ~1500 classes from their single file...

:ballot_box_with_check: Composer package with autoloading

:ballot_box_with_check: Refactor to pass config through constructor

:ballot_box_with_check: Refactor for optional environment variable config

:white_medium_small_square: Namespacing

## License

Original work is Copyright (c) 2010-2012 NetSuite Inc. and provided "as is." Refer to `Netsuite Toolkit License Agreement` file.

Modified work is Copyright (c) 2015 Ryan Winchester (fungku), licensed under the **Apache 2.0** license. Refer to the `LICENSE` file.
