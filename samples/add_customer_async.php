<?php

require_once '../PHPToolkit/NetSuiteService.php';

$service = new NetSuiteService();

// create Customer record
$customer1 = new Customer();

$name = 'customer_php_async_1';

$customerFields1 = array (
    'entityId' 		=> $name,
    'companyName'	=> $name,
    'externalId'	=> $name
);

setFields($customer1, $customerFields1);

$customer2 = new Customer();

$name2 = 'customer_php_async_2';

$customerFields2 = array (
    'entityId' 		=> $name2,
    'companyName'	=> $name2,
    'externalId'	=> $name2
);

setFields($customer2, $customerFields2);

// perform async add operation
$asyncreq = new AsyncAddListRequest();
$asyncreq->record = array($customer1, $customer2);
$checkAsync = $service->asyncAddList($asyncreq);

// get job id
$jobId = $checkAsync->asyncStatusResult->jobId;
$checkasyncreq = new CheckAsyncStatusRequest();
$checkasyncreq->jobId = $jobId;

while ($checkAsync->asyncStatusResult->status == 'pending' || $checkAsync->asyncStatusResult->status == 'processing') {
    sleep(10);
    $checkAsync = $service->checkAsyncStatus($checkasyncreq);
}

// once it is done processing, get the result
$getasyncreq = new GetAsyncResultRequest();
$getasyncreq->jobId = $jobId;
$getasyncreq->pageIndex = "1";

$result = $service->getAsyncResult($getasyncreq);

?> 

