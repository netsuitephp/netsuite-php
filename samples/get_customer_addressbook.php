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
    echo "\nEmail: ". $customer->email . "\n";

    $addressBookListArray = $customer->addressbookList->addressbook;
    if (is_array($addressBookListArray)) {
        foreach ($addressBookListArray as $addressEntry) {
            $address = $addressEntry->addressbookAddress;
            echo "\nAddress:\n";
            echo $addressEntry->label . "\n" .
                $address->attention . "\n" .
                $address->addressee . "\n" .
                $address->phone . "\n" .
                $address->city . "\n" .
                $address->state . "\n" .
                $address->zip . "\n" .
                $address->country . "\n\n";
        }
    } else {
        $address = $addressBookListArray->addressbookAddress;
        echo "\nAddress:\n";
        echo $addressBookListArray->label . "\n" .
            $address->attention . "\n" .
            $address->addressee . "\n" .
            $address->phone . "\n" .
            $address->city . "\n" .
            $address->state . "\n" .
            $address->zip . "\n" .
            $address->country . "\n\n";
    }
}

?>

