<?php

require_once '../PHPToolkit/NetSuiteService.php';


$service = new NetSuiteService();

$request = new GetRequest();
$request->baseRef = new RecordRef();
$request->baseRef->internalId = "21";
$request->baseRef->type = "customer";
$getResponse = $service->get($request);

if (!$getResponse->readResponse->status->isSuccess) {
    echo "GET ERROR";
} else {
    $customer = $getResponse->readResponse->record;
    echo "GET SUCCESS, customer:";
    echo "\nCompany name: ". $customer->companyName;
    echo "\nInternal Id: ". $customer->internalId;
    echo "\nEmail: ". $customer->email;
}

?>

