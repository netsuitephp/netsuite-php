<?php

namespace Fungku\NetSuite\Classes;

class ProjectTaskAssignmentSearchRowBasic extends SearchRowBasic {
	public $actualWork;
	public $cost;
	public $costBase;
	public $endDate;
	public $estimatedWork;
	public $estimatedWorkBaseline;
	public $grossProfit;
	public $grossProfitBase;
	public $internalId;
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
		"actualWork" => "SearchColumnDoubleField[]",
		"cost" => "SearchColumnDoubleField[]",
		"costBase" => "SearchColumnDoubleField[]",
		"endDate" => "SearchColumnDateField[]",
		"estimatedWork" => "SearchColumnDoubleField[]",
		"estimatedWorkBaseline" => "SearchColumnDoubleField[]",
		"grossProfit" => "SearchColumnDoubleField[]",
		"grossProfitBase" => "SearchColumnDoubleField[]",
		"internalId" => "SearchColumnSelectField[]",
		"price" => "SearchColumnDoubleField[]",
		"priceBase" => "SearchColumnDoubleField[]",
		"resource" => "SearchColumnSelectField[]",
		"resourceName" => "SearchColumnStringField[]",
		"serviceItem" => "SearchColumnStringField[]",
		"serviceItemDesc" => "SearchColumnStringField[]",
		"startDate" => "SearchColumnDateField[]",
		"unitCost" => "SearchColumnDoubleField[]",
		"unitCostBase" => "SearchColumnDoubleField[]",
		"unitPrice" => "SearchColumnDoubleField[]",
		"unitPriceBase" => "SearchColumnDoubleField[]",
		"units" => "SearchColumnDoubleField[]",
		"workCalendar" => "SearchColumnSelectField[]",
	);
}

