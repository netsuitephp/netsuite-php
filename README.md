# NetSuite PHP API Client

 [![License](https://img.shields.io/packagist/l/ryanwinchester/netsuite-php.svg?style=flat-square)](https://packagist.org/packages/ryanwinchester/netsuite-php)
  [![Packagist](https://img.shields.io/packagist/dt/ryanwinchester/netsuite-php.svg?maxAge=2592000)]()

A PHP API client package for NetSuite, pried from the [NetSuite PHP Toolkit](http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml).

## Adding it to your project:

Require with composer:

**V2 in Alpha**

**NOTE: package name change**

```
composer require "ryanwinchester/netsuite-php:2017.1.*"
```

## Changes in v2:

- Changed namespaces
- Significantly simplified NetSuiteClient
- Added a convenience method for creating an instance using environment variables for configuration
- Improved logging, still logs even if exception is thrown in soap call.

## Quickstart:

#### Instantiating the NetSuiteService class:

The rest of the examples assume that you have done this.

```php
require 'vendor/autoload.php';

use NetSuite\NetSuiteService;

$config = array(
   // required -------------------------------------
   "endpoint" => "2017_1",
   "host"     => "https://webservices.netsuite.com",
   "email"    => "jDoe@netsuite.com",
   "password" => "mySecretPwd",
   "role"     => "3",
   "account"  => "MYACCT1",
   "app_id"   => "4AD027CA-88B3-46EC-9D3E-41C6E6A325E2",
   // optional -------------------------------------
   "logging"  => true,
   "log_path" => "/var/www/myapp/logs/netsuite"
);

$service = new NetSuiteService($config);
```

#### Retreiving a customer record:

```php
use NetSuite\Classes\GetRequest;
use NetSuite\Classes\RecordRef;

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

#### Searching for customers who emails start with "j":

```php
use NetSuite\Classes\SearchStringField;
use NetSuite\Classes\CustomerSearchBasic;
use NetSuite\Classes\SearchRequest;

$service->setSearchPreferences(false, 20);

$emailSearchField = new SearchStringField();
$emailSearchField->operator = "startsWith";
$emailSearchField->searchValue = "j";

$search = new CustomerSearchBasic();
$search->email = $emailSearchField;

$request = new SearchRequest();
$request->searchRecord = $search;

$searchResponse = $service->search($request);

if (!$searchResponse->searchResult->status->isSuccess) {
    echo "SEARCH ERROR";
} else {
    $result = $searchResponse->searchResult;
    $count = $result->totalRecords;
    $records = $result->recordList;

    echo $count . " records were found.";
}
```

#### Adding a new customer:

```php
use NetSuite\Classes\Customer;
use NetSuite\Classes\RecordRef;
use NetSuite\Classes\AddRequest;

$customer = new Customer();
$customer->lastName = "Doe";
$customer->firstName = "John";
$customer->companyName = "ABC company";
$customer->phone = "123456789";
$customer->email = "joe.doe@abc.com";

$customer->customForm = new RecordRef();
$customer->customForm->internalId = -8;

$request = new AddRequest();
$request->record = $customer;

$addResponse = $service->add($request);

if (!$addResponse->writeResponse->status->isSuccess) {
    echo "ADD ERROR";
} else {
    echo "ADD SUCCESS, id " . $addResponse->writeResponse->baseRef->internalId;
}
```

### Logging

You can set logging on or off on the fly, or override the configuration setting passed in.
Please note that if you don't specify a logging directory in the config or afterwards, then you won't get logs no matter what you do.

**Set a logging path**

```php
$service->setLogPath('/path/to/logs');
```

**Turn logging on**

```php
$service->logRequests(true);  // Turn logging on.
```

**Turn logging off**

```php
$service->logRequests(false); // Turn logging off.
```

#### Token-Based Authentication

Instead of instantiating `NetSuiteService` with the standard credentials method, you can pass a set of credentials of the form `consumerKey`/`consumerSecret`/`token`/`tokenSecret`.

```php
$config = array(
   // required -------------------------------------
   "endpoint"       => "2017_1",
   "host"           => "https://webservices.netsuite.com",
   "account"        => "MYACCT1",
   "consumerKey"    => "0123456789ABCDEF",
   "consumerSecret" => "0123456789ABCDEF",
   "token"          => "0123456789ABCDEF",
   "tokenSecret"    => "0123456789ABCDEF",
   // optional -------------------------------------
   "signatureAlgorithm" => 'sha256', // Defaults to 'sha256'
);

$service = new NetSuiteService($config);
```

## Status

 - [x] Extract the ~1500 classes from their single file...
 - [x] Composer package with autoloading
 - [x] Pass config through constructor
 - [x] Optional environment variable config
 - [x] Namespacing
 - [x] Logging

## License

[Original work](http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml) is Copyright &copy; 2010-2015 NetSuite Inc. and provided "as is." Refer to the [NetSuite Toolkit License Agreement](https://github.com/ryanwinchester/netsuite-php/blob/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt) file.

All additional work is licensed under the **Apache 2.0** open source software license according to the included [LICENSE](https://github.com/ryanwinchester/netsuite-php/blob/master/LICENSE.txt) file.
