# NetSuite PHP API Client

 [![License](https://img.shields.io/packagist/l/ryanwinchester/netsuite-php.svg?style=flat-square)](https://packagist.org/packages/ryanwinchester/netsuite-php)
  [![Packagist](https://img.shields.io/packagist/dt/ryanwinchester/netsuite-php.svg?maxAge=2592000)]()

A PHP API client package for NetSuite, pried from the [NetSuite PHP Toolkit](http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml).

## Adding it to your project:

Require with composer:

**V2 in Alpha**

```
composer require ryanwinchester/netsuite-php
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
   "endpoint" => "2019_1",
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

You can alternatively place your config in environment variables. This is
helpful in hosted environments where deployment of config files is either
not desired or practical. You can find the valid keys in the included
.env.example file with sample values.

Previously, instantiating the NetSuiteClient with ENV data entailed using the
static method `createFromEnv`. This method is now marked as `deprecated` and
if you are using it, please change your code to use the standard constructor
which will extract your configuration out of the $_ENV superglobal for you.

```php
require 'vendor/autoload.php';

use NetSuite\NetSuiteService;

$service = new NetSuiteService();
```

## Account-Specific Data Center URLs

With 2019_1, this library provides support to utilize NetSuite's new
account-specific data center URL with each request. In practice, this lookup
does have a measurable overhead cost. As such, I'd suggest using this
feature only if your manner of NetSuite integration is such that you make
fewer connections, handling integration in batches. If your manner of
integration is to instead make many frequent, brief requests from NetSuite,
then you will probably prefer to provide your data center URL explicitly and
remove the lookup from every session.

```php
// To use your own defined data center URL (or sandbox, for instance):
$config['host'] = 'https://123456789.suitetalk.api.netsuite.com';

// To allow the service to get the correct URL for your account on the fly,
// use the legacy webservices url.
$config['host'] = 'https://webservices.netsuite.com';
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

#### Adding a salesOrder with a custom field:

This example of an order creation is not a complete example but shows how
you set up and add the object generally as well as how you would add custom
fields to the sale on insert.

```php
use NetSuite\Classes\AddRequest;
use NetSuite\Classes\CustomFieldList;
use NetSuite\Classes\RecordRef;
use NetSuite\Classes\SalesOrder;
use NetSuite\Classes\StringCustomField;

$sale = new SalesOrder();

// Associate a customer record with this order
$sale->entity = new RecordRef();
$sale->entity->type = 'customer';
$sale->entity->internalId = $myCustomerInternalId;

// Set the date of the order
$sale->tranDate = $myOrderDate;

// Set the shipping method and price for the order
$sale->shipMethod = new RecordRef();
$sale->shipMethod->internalId = $myShipMethodId;
$sale->shippingCost = $myShippingTotal;

// Look at the SalesOrder class definition for a list of all the available
// properties and their types that you can use on a sales order in NetSuite.
// You'll need to add items, addresses, status, etc.

// Create a sample string-type custom field to the order which represents
// the ID of the order in our source platform:
$cfOrderNum = new StringCustomFieldRef();
$cfOrderNum->scriptId = 'custbody_order_num';
$cfOrderNum->value = $myOrderNumber;

// Collect all custom fields into an array and add the list of fields to the
// order add request:
$customFields[] = $cfOrderNum;
$sale->customFieldList = new CustomFieldList();
$sale->customFieldList->customField = $customFields;

// Submit the sales order create request
$request = new AddRequest();
$request->record = $sale;
$response = $service->add($request);

if (!$addResponse->writeResponse->status->isSuccess) {
    echo "ADD ERROR";
} else {
    echo "ADD SUCCESS, id " . $addResponse->writeResponse->baseRef->internalId;
}
```

#### Creating an Item Fulfillment:

Creating an item fulfillment against a Sales Order requires initializing the
new record based on the target record (the sales order). Then you can set
the properties on the new record accordingly and add it to NetSuite. The
same method is used for creating CashSale records.

```php
use NetSuite\Classes\AddRequest;
use NetSuite\Classes\InitializeRecord;
use NetSuite\Classes\InitializeRef;
use NetSuite\Classes\InitializeRequest;
use NetSuite\Classes\ItemFulfillmentPackage;
use NetSuite\Classes\ItemFulfillmentPackageList;

// Initialize an item fulfillment from an existing Sales Order
$reference = new InitializeRef();
$reference->type = InitializeRefType::salesOrder;
$reference->internalId = $mySalesOrderInternalId;

$record = new InitializeRecord();
$record->type = InitializeType::itemFulfillment;
$record->reference = $reference;

$request = new InitializeRequest();
$request->initializeRecord = $record;

$response = $service->initialize($request);

if (!$response->readResponse->status->isSuccess) {
    echo "INIT ERROR";
}

$itemFulfillment = $response->readResponse->record;

$package = new ItemFulfillmentPackage();
$package->packageWeight = 1;
$package->packageTrackingNumber = $myTrackingNumber;

$packageList = new ItemFulfillmentPackageList();
$packageList->package = $package;
$itemFulfillment->packageList = $packageList;

$request = new AddRequest();
$request->record = $itemFulfillment;

$response = $service->add($request);

if (!$response->writeResponse->status->isSuccess) {
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
   "endpoint"       => "2019_1",
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
 - [x] Dynamic Data Center URLs
 - [x] Expanded user documentation
 - [x] Support automagic configuration via ENV variables

## License

[Original work](http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml) is Copyright &copy; 2010-2015 NetSuite Inc. and provided "as is." Refer to the [NetSuite Toolkit License Agreement](https://github.com/ryanwinchester/netsuite-php/blob/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt) file.

All additional work is licensed under the **Apache 2.0** open source software license according to the included [LICENSE](https://github.com/ryanwinchester/netsuite-php/blob/master/LICENSE.txt) file.
