<?php namespace Fungku\NetSuite\Classes;

class ProjectTaskAssignmentSearchBasic extends SearchRecordBasic {
	public $actualWork;
	public $cost;
	public $costBase;
	public $endDate;
	public $estimatedWork;
	public $estimatedWorkBaseline;
	public $grossProfit;
	public $grossProfitBase;
	public $internalId;
	public $internalIdNumber;
	public $price;
	public $priceBase;
	public $resource;
	public $resourceName;
	public $serviceItem;
	public $serviceItemDesc;
	public $startDate;
	public $unitCost;
	public $unitCostBase;
	public $unitPrice;
	public $unitPriceBase;
	public $units;
	public $workCalendar;
	static $paramtypesmap = array(
		"actualWork" => "SearchDoubleField",
		"cost" => "SearchDoubleField",
		"costBase" => "SearchDoubleField",
		"endDate" => "SearchDateField",
		"estimatedWork" => "SearchDoubleField",
		"estimatedWorkBaseline" => "SearchDoubleField",
		"grossProfit" => "SearchDoubleField",
		"grossProfitBase" => "SearchDoubleField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"price" => "SearchDoubleField",
		"priceBase" => "SearchDoubleField",
		"resource" => "SearchMultiSelectField",
		"resourceName" => "SearchStringField",
		"serviceItem" => "SearchStringField",
		"serviceItemDesc" => "SearchStringField",
		"startDate" => "SearchDateField",
		"unitCost" => "SearchDoubleField",
		"unitCostBase" => "SearchDoubleField",
		"unitPrice" => "SearchDoubleField",
		"unitPriceBase" => "SearchDoubleField",
		"units" => "SearchDoubleField",
		"workCalendar" => "SearchMultiSelectField",
	);
}

