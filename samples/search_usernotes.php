<?php

require_once '../PHPToolkit/NetSuiteService.php';

$service = new NetSuiteService();

$service->setSearchPreferences(false, 20, false);

$noteSearchAdvance = new NoteSearchAdvanced();
$noteSearch = new NoteSearch();
$customerSearchBasic = new CustomerSearchBasic();
$searchValue = new RecordRef();
$searchValue->type = 'customer';
$searchValue->internalId = 21;
$searchMultiSelectField = new SearchMultiSelectField();
setFields($searchMultiSelectField, array('operator' => 'anyOf', 'searchValue' => $searchValue));
$customerSearchBasic->internalId = $searchMultiSelectField;
$noteSearch->customerJoin = $customerSearchBasic;
$noteSearchAdvance->criteria = $noteSearch;

$request = new SearchRequest();
$request->searchRecord = $noteSearchAdvance;
$searchResponse = $service->search($request);

if (!$searchResponse->searchResult->status->isSuccess) {
    echo "SEARCH ERROR";
} else {
    echo "SEARCH SUCCESS, records found: " . $searchResponse->searchResult->totalRecords;
}

?>

