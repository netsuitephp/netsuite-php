<?php

require_once '../PHPToolkit/NetSuiteService.php';

$service = new NetSuiteService();

$search = new CustomRecordSearchAdvanced();
$search->savedSearchId = "63";

$request = new SearchRequest();
$request->searchRecord = $search;

$searchResponse = $service->search($request);

if (!$searchResponse->searchResult->status->isSuccess) {
    echo "SEARCH ERROR";
} else {
    echo "SEARCH SUCCESS, records found: " . $searchResponse->searchResult->totalRecords . "\n";
    $records = $searchResponse->searchResult->searchRowList->searchRow;
    foreach ($records as $record)  {
        echo "Name: " . $record->basic->name->searchValue . "\n";
    }

}

?>

