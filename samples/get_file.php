<?php

require_once '../PHPToolkit/NetSuiteService.php';

$service = new NetSuiteService();

$request = new GetRequest();
$request->baseRef = new RecordRef();
$request->baseRef->internalId = "607";
$request->baseRef->type = "file";
$getResponse = $service->get($request);
if (!$getResponse->readResponse->status->isSuccess) {
    echo "GET ERROR";
} else {
    $file = $getResponse->readResponse->record;
    echo "GET SUCCESS, File name is " . $file->name;
}

?>

