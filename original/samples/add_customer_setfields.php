<?php

require_once '../PHPToolkit/NetSuiteService.php';

$service = new NetSuiteService();

$customer = new Customer();
$customerFields = array (
    'firstName'			=> "Joe",
    'lastName'			=> "Doe",
    'companyName'		=> "ABC company",
    'phone'		=> "123456789",
    'email'				=> "joe.doe@abc.com",
);
setFields($customer, $customerFields);

$request = new AddRequest();
$request->record = $customer;

$addResponse = $service->add($request);

if (!$addResponse->writeResponse->status->isSuccess) {
    echo "ADD ERROR";
} else {
    echo "ADD SUCCESS, id " . $addResponse->writeResponse->baseRef->internalId;
}

?> 

