<?php

require_once '../PHPToolkit/NetSuiteService.php';

$service = new NetSuiteService();

$svr = new getSelectValueRequest();
$svr->fieldDescription = new GetSelectValueFieldDescription();
$svr->pageIndex = 1;
/*$svr->fieldDescription->recordType = RecordType::salesOrder;
$svr->fieldDescription->sublist = "itemList";
$svr->fieldDescription->field = "price";
$svr->fieldDescription->
*/

$priceFields = array(
    'recordType'  => RecordType::salesOrder,
    'sublist'    => 'itemList',
    'field'    => 'price',
    'filterByValueList'    => array(
        'filterBy'    => array(
            array(
            'field'    => 'item',
            'sublist'    => 'itemList',
            'internalId'        => '458',
        )
            )
    )
);

setFields($svr->fieldDescription, $priceFields);

$gsv = $service->getSelectValue($svr);

$id = null;
foreach($gsv->getSelectValueResult->baseRefList->baseRef as $pricelevel) {
    if ($pricelevel->name == 'Custom') {
        $id = $pricelevel->internalId;
        break;
    }
}


if ($id != null) {
    echo "Custom price level id is " . $id . "\n";
} else {
    echo "Custom price level not found " . $id . "\n";
}

$so = new SalesOrder();
$so->entity = new RecordRef();
$so->entity->internalId = 21;
$so->itemList = new SalesOrderItemList();
$soi = new SalesOrderItem();
$soi->item = new RecordRef();
$soi->item->internalId = 104;
$soi->quantity = 3;
$soi->price = new RecordRef();
$soi->price->internalId = $id;
$soi->amount = 55.3;
$so->itemList->item = array($soi);

$request = new AddRequest();
$request->record = $so;

$addResponse = $service->add($request);

if (!$addResponse->writeResponse->status->isSuccess) {
    echo "ADD ERROR";
    exit();
} else {
    echo "ADD SUCCESS, id " . $addResponse->writeResponse->baseRef->internalId;
}

?>