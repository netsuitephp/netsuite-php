# NetSuite PHP API Client

[![Version](https://img.shields.io/packagist/v/fungku/netsuite-php.svg?style=flat-square)](https://packagist.org/packages/fungku/netsuite-php)
 [![Total Downloads](https://img.shields.io/packagist/dt/fungku/netsuite-php.svg?style=flat-square)](https://packagist.org/packages/fungku/netsuite-php)
 [![License](https://img.shields.io/packagist/l/fungku/netsuite-php.svg?style=flat-square)](https://packagist.org/packages/fungku/netsuite-php)
 [![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/fungku/netsuite-php.svg?style=flat-square)](https://scrutinizer-ci.com/g/fungku/netsuite-php/?branch=master)
 [![Build Status](https://img.shields.io/travis/fungku/netsuite-php.svg?style=flat-square)](https://travis-ci.org/fungku/netsuite-php)

A PHP API client package for NetSuite, pried from the [NetSuite PHP Toolkit](http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml).

You can now pass the configuration to the constructor or set environment variables to instantiate the service class.

Also, the classes have been extracted for PSR autoloading, and for better IDE integration. As well as just making
it easier to scan and see what is available.

Just added Namespaces :new:

## Adding it to your project:

For endpoint 2015_1

```
composer require "fungku/netsuite-php: 2015.1.*"
```

The versions now match the endpoint version. So whatever endpoint you are using, you should match the version to that.

## Examples:

#### Instantiating the NetSuiteService class:

The rest of the examples assume that you have done this.

```php
$config = array(
   // Required
   "endpoint"  => "2014_2",
    "host"     => "https://webservices.netsuite.com",
    "email"    => "jDoe@netsuite.com",
    "password" => "mySecretPwd",
    "role"     => "3",
    "account"  => "MYACCT1",
    // Optional
    "logging"  => true,
    "log_path" => "/var/www/myapp/logs/netsuite"
);

$service = new Fungku\NetSuite\NetSuiteService($config);
```

If you would rather use environment variables, [you can do that](#using-environment-variables-instead-of-a-config-array) instead of the config array.

#### Retreiving a customer record:

```php
use Fungku\NetSuite\Classes\GetRequest;
use Fungku\NetSuite\Classes\RecordRef;

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
use Fungku\NetSuite\Classes\SearchStringField;
use Fungku\NetSuite\Classes\CustomerSearchBasic;
use Fungku\NetSuite\Classes\SearchRequest;

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
use Fungku\NetSuite\Classes\Customer;
use Fungku\NetSuite\Classes\RecordRef;
use Fungku\NetSuite\Classes\AddRequest;

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

#### Set a logging path

```php
$service->setLogPath('/path/to/logs');
```

#### Turn logging on

```php
$service->logRequests(true);  // Turn logging on.
```

#### Turn logging off

```php
$service->logRequests(false); // Turn logging off.
```

#### Using environment variables instead of a config array:

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

 - [x] Extract the ~1500 classes from their single file...
 - [x] Composer package with autoloading
 - [x] Pass config through constructor
 - [x] Optional environment variable config
 - [x] Namespacing
 - [x] Logging

## License

[Original work](http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml) is Copyright &copy; 2010-2012 NetSuite Inc. and provided "as is." Refer to the [NetSuite Toolkit License Agreement](https://github.com/fungku/netsuite-php/blob/master/original-agreement.docx?raw=true) file.

Modified and new work is Copyright &copy; 2015 Ryan Winchester (fungku), licensed under the **Apache 2.0** open source software license. Refer to the [LICENSE](https://github.com/fungku/netsuite-php/blob/master/LICENSE.txt) file.
