# Netsuite PHP API Client

[![Latest Stable Version](https://poser.pugx.org/fungku/netsuite-php/v/stable.svg)](https://packagist.org/packages/fungku/netsuite-php) [![Total Downloads](https://poser.pugx.org/fungku/netsuite-php/downloads.svg)](https://packagist.org/packages/fungku/netsuite-php) [![Latest Unstable Version](https://poser.pugx.org/fungku/netsuite-php/v/unstable.svg)](https://packagist.org/packages/fungku/netsuite-php) [![License](https://poser.pugx.org/fungku/netsuite-php/license.svg)](https://packagist.org/packages/fungku/netsuite-php)

A PHP API client package for NetSuite, pried from the [NetSuite PHP Toolkit](http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml).

You can now pass the configuration to the constructor or set environment variables to instantiate the service class.

Also, the classes have been extracted for PSR autoloading, and for better IDE integration. As well as just making
it easier to scan and see what is available.

## Adding it to your project:

```
composer require "fungku/netsuite-php:~1.0"
```

## Examples:

#### Instantiating the NetSuiteService class:

The rest of the examples assume that you have done this.

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
```

If you would rather use environment variables, [you can do that](#using-environment-variables-instead-of-a-config-array) instead of the config array.

#### Retreiving a customer record:

```php
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

### Searching for customers who emails start with "j":

```php
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

### Adding a new customer:

```php
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
 - [x] Refactor to pass config through constructor
 - [x] Refactor for optional environment variable config
 - [ ] Namespacing

## License

[Original work](http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml) is Copyright &copy; 2010-2012 NetSuite Inc. and provided "as is." Refer to the [Netsuite Toolkit License Agreement](https://github.com/fungku/netsuite-php/blob/master/original/NetSuite%20Toolkit%20License%20Agreement.docx?raw=true) file.

Modified work is Copyright &copy; 2015 Ryan Winchester (fungku), licensed under the **Apache 2.0** license. Refer to the [LICENSE](https://github.com/fungku/netsuite-php/blob/master/LICENSE.txt) file.
