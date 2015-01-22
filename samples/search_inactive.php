<?php

require_once '../PHPToolkit/NetSuiteService.php';

$service = new NetSuiteService();

$service->setSearchPreferences(false, 20);

$itemSearch = new ItemSearchBasic();
$searchItems = array( 'isInactive' => array('searchValue' => 'TRUE'));
setFields($itemSearch, $searchItems);

$request = new SearchRequest();
$request->searchRecord = $itemSearch;

$searchResponse = $service->search($request);

/*
 *  Issue 200500
$searchItems = array( 'isInactive' ,"value" => TRUE); //customer's command => is ignored and generates a request without isInactive filter

Now results in:

Warning: SetFields error: parameter "value" is not a valid parameter for an object of class ItemSearchBasic, it will be omitted

*/

if (!$searchResponse->searchResult->status->isSuccess) {
    echo "SEARCH ERROR";
} else {
    echo "SEARCH SUCCESS, records found: " . $searchResponse->searchResult->totalRecords;
}

?>

