<?php

require_once '../PHPToolkit/NetSuiteService.php';

$service = new NetSuiteService();

$po = new PurchaseOrder();
$po->entity = new RecordRef();
$po->entity->internalId = 1;
$po->itemList = new PurchaseOrderItemList();
$poi = new PurchaseOrderItem();
$poi->item = new RecordRef();
$poi->item->internalId = 104;
$poi->quantity = 3;
$po->itemList->item = array($poi);

$request = new AddRequest();

// SelectCustomFieldRef
$aSelectField = new SelectCustomFieldRef();
$aSelectField->value = new ListOrRecordRef();
$aSelectField->value->internalId = 87;
$aSelectField->scriptId = 'custentity7';

// MultiSelectCustomFieldRef
$aMSField = new MultiSelectCustomFieldRef();
$lorr1 = new ListOrRecordRef();
$lorr1->internalId = 87;
$lorr2 = new ListOrRecordRef();
$lorr2->internalId = 176;
$aMSField->value = array($lorr1, $lorr2);
$aMSField->scriptId = 'custentity6';

// BooleanCustomFieldRef
$aBooleanField = new BooleanCustomFieldRef();
$aBooleanField->value = true;
$aBooleanField->scriptId = 'custentity8';

// create Contact record
$contact = new Contact();
$contact->entityId = "PHP test Contact";
$contact->company = new RecordRef();
$contact->company->internalId = '21';
$contact->customFieldList = new CustomFieldList();
$contact->customFieldList->customField = array($aBooleanField, $aSelectField, $aMSField);
$request->record = $contact;

//$addResponse = callSoapWithLogin("add", $request);
$addResponse = $service->add($request);

if (!$addResponse->writeResponse->status->isSuccess) {
    echo "ADD ERROR";
    exit();
} else {
    echo "ADD SUCCESS, id " . $addResponse->writeResponse->baseRef->internalId;
}

?>