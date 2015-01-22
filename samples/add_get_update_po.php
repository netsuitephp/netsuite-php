<?php

require_once '../PHPToolkit/NetSuiteService.php';

$service = new NetSuiteService();

$po = new PurchaseOrder();
$po->entity = new RecordRef();
$po->entity->internalId = 162;
$po->itemList = new PurchaseOrderItemList();
$poi = new PurchaseOrderItem();
$poi->item = new RecordRef();
$poi->item->internalId = 104;
$poi->quantity = 3;
$po->itemList->item = array($poi);

$request = new AddRequest();
$request->record = $po;

$addResponse = $service->add($request);
if (!$addResponse->writeResponse->status->isSuccess) {
    echo "ADD ERROR";
    exit();
} else {
    echo "ADD SUCCESS, id " . $addResponse->writeResponse->baseRef->internalId;
}

echo "\n-----------------------\n";

$gr = new GetRequest();
$gr->baseRef = new RecordRef();
$gr->baseRef->internalId = $addResponse->writeResponse->baseRef->internalId;
$gr->baseRef->type = "purchaseOrder";

$getResponse = $service->get($gr);
if (!$getResponse->readResponse->status->isSuccess) {
    echo "GET ERROR";
    exit();
} else {
    echo "GET SUCCESS";
}

echo "\n-----------------------\n";

$po2 = $getResponse->readResponse->record;
$po2->memo = "updated";
$po2->itemList->replaceAll = false;
$poi = new PurchaseOrderItem();
$poi->item = new RecordRef();
$poi->item->internalId = 458;
$poi->quantity = 5;
$po2->itemList->item = array($poi);

$request = new UpdateRequest();
$request->record = $po2;

$service->setPreferences(false, false, false, true);

$updateResponse = $service->update($request);
if (!$updateResponse->writeResponse->status->isSuccess) {
    echo "UPDATE ERROR";
} else {
    echo "UPDATE SUCCESS, id " . $updateResponse->writeResponse->baseRef->internalId;
}

?>