# Usage Examples

* [Introduction](#Introduction)
* [Retrieve a Record](#Retrieve-a-Record)
* [Search For a Record](#Search-for-a-Record)
* [Add a Customer Record](#Add-a-Customer-Record)
* [Add a SalesOrder with a Custom Field](#Add-a-Record-with-a-Custom-Field)
* [Add an ItemFulfillment Record](#Add-an-item-fulfillment)
* [Resources](#resources)

### Introduction

This document contains a few basic usage examples of web services calls built
using the `netsuitephp/netsuite-php` library.

This is not intended to be a
tutorial or an exhaustive list of typical api calls, but a simple
demonstration of how the library can be used to interact with NetSuite's
web services. Once you understand how the most basic request is built and
sent, you should be able to do pretty much anything supported by NetSuite
by using the web services documentation and by looking through the list of
classes in `netsuite-php/src/Classes` (this last part can't be overstressed).

The list of examples below should really be satisfactory to get someone
pointed in the right direction, so if you don't see your exact use case
below, you should just adapt these concepts and mix in a dash of
experimentation. Unless a very compelling case is put forward to the contrary,
there's no plan to continue expanding this set of examples.


#### Retrieve a Record

```php
// Fetch a Customer record by their internalId
use NetSuite\Classes\GetRequest;
use NetSuite\Classes\RecordRef;

$request = new GetRequest();
$request->baseRef = new RecordRef();
$request->baseRef->internalId = "123456789";
$request->baseRef->type = "customer";

$getResponse = $service->get($request);

if ( ! $getResponse->readResponse->status->isSuccess) {
    echo "GET ERROR";
} else {
    $customer = $getResponse->readResponse->record;
}
```

#### Search For a Record

```php
// Find a record whose first name starts with "Justin"
use NetSuite\Classes\SearchStringField;
use NetSuite\Classes\CustomerSearchBasic;
use NetSuite\Classes\SearchRequest;

// Limit to 20 results per page
$service->setSearchPreferences(false, 20);

$searchField = new SearchStringField();
$searchField->operator = "startsWith";
$searchField->searchValue = "Justin";

$search = new CustomerSearchBasic();
$search->firstName = $searchField;

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

#### Add a Customer Record

```php
// Create a new Customer record
use NetSuite\Classes\Customer;
use NetSuite\Classes\RecordRef;
use NetSuite\Classes\AddRequest;

$customer = new Customer();
$customer->firstName = "John";
$customer->lastName = "Doe";
$customer->companyName = "Bobby's Bits";
$customer->phone = "123456789";
$customer->email = "test@example.com";
// ... add all of your fields, then create the request
$request = new AddRequest();
$request->record = $customer;

$addResponse = $service->add($request);

if (!$addResponse->writeResponse->status->isSuccess) {
    echo "ADD ERROR";
} else {
    echo "ADD SUCCESS, id " . $addResponse->writeResponse->baseRef->internalId;
}
```

#### Add a SalesOrder with a Custom Field

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
$cfOrderNum->scriptId = 'custbody_order_id';
$cfOrderNum->value = $myOrderId; // Some value from your application

// Collect all custom fields into an array and add the list of fields to the
// order add request:
$customFields[] = $cfOrderNum;
$sale->customFieldList = new CustomFieldList();
$sale->customFieldList->customField = $customFields;

// Submit the sales order create request
$request = new AddRequest();
$request->record = $sale;
$addResponse = $service->add($request);

if (!$addResponse->writeResponse->status->isSuccess) {
    echo "ADD ERROR";
} else {
    echo "ADD SUCCESS, id " . $addResponse->writeResponse->baseRef->internalId;
}
```

#### Add an Item Fulfillment

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

$initResponse = $service->initialize($request);

if (!$initResponse->readResponse->status->isSuccess) {
    echo "INIT ERROR";
}

$itemFulfillment = $initResponse->readResponse->record;

// Create and add a package object to the ItemFulfillment
$package = new ItemFulfillmentPackage();
$package->packageWeight = 1;
$package->packageTrackingNumber = $myTrackingNumber;

$packageList = new ItemFulfillmentPackageList();
$packageList->package = $package;
$itemFulfillment->packageList = $packageList;

$request = new AddRequest();
$request->record = $itemFulfillment;

$addResponse = $service->add($request);

if (!$addResponse->writeResponse->status->isSuccess) {
    echo "ADD ERROR";
} else {
    echo "ADD SUCCESS, id " . $addResponse->writeResponse->baseRef->internalId;
}
```

### Resources

The best source of information on how to build valid requests is the Schema
Browser for the web services version you're working with. The SuiteTalk docs
link below will have a link to the most recent schema browser.

* https://www.netsuite.com/portal/developers/resources/suitetalk-documentation.shtml
---
If you are still having trouble figuring out how to accomplish the task at
hand, then you could try searching the `[netsuite]` tag on stackoverflow or
posting your own query under that tag if no previous solutions are found:

* https://stackoverflow.com/questions/tagged/netsuite
---
We have our own small discussion area attached to this library repo
on github where you can try to look for assistance, but this area has very
low visibility and Stack is likely to be much more fruitful.

* https://github.com/netsuitephp/netsuite-php/discussions
---
Finally, there's always NetSuite's own support. They provide some direct
support and also certify third party consultants to help with implementations.

* https://www.netsuite.com/portal/services/support-services/suiteanswers.shtml
