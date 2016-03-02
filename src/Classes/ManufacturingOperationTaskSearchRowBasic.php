<?php

namespace Fungku\NetSuite\Classes;

class ManufacturingOperationTaskSearchRowBasic extends SearchRowBasic {
	public $actualRunTime;
	public $actualSetupTime;
	public $completedQuantity;
	public $endDate;
	public $estimatedWork;
	public $externalId;
	public $id;
	public $inputQuantity;
	public $internalId;
	public $laborResources;
	public $lagAmount;
	public $lagType;
	public $lagUnits;
	public $machineResources;
	public $manufacturingCostTemplate;
	public $manufacturingWorkCenter;
	public $message;
	public $name;
	public $order;
	public $predecessor;
	public $predecessorType;
	public $remainingQuantity;
	public $runRate;
	public $runTime;
	public $sequence;
	public $setupTime;
	public $startDate;
	public $status;
	public $workOrder;
	public $customFieldList;
	static $paramtypesmap = array(
		"actualRunTime" => "SearchColumnDoubleField[]",
		"actualSetupTime" => "SearchColumnDoubleField[]",
		"completedQuantity" => "SearchColumnDoubleField[]",
		"endDate" => "SearchColumnDateField[]",
		"estimatedWork" => "SearchColumnDoubleField[]",
		"externalId" => "SearchColumnStringField[]",
		"id" => "SearchColumnLongField[]",
		"inputQuantity" => "SearchColumnDoubleField[]",
		"internalId" => "SearchColumnSelectField[]",
		"laborResources" => "SearchColumnLongField[]",
		"lagAmount" => "SearchColumnDoubleField[]",
		"lagType" => "SearchColumnEnumSelectField[]",
		"lagUnits" => "SearchColumnStringField[]",
		"machineResources" => "SearchColumnLongField[]",
		"manufacturingCostTemplate" => "SearchColumnSelectField[]",
		"manufacturingWorkCenter" => "SearchColumnSelectField[]",
		"message" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"order" => "SearchColumnDoubleField[]",
		"predecessor" => "SearchColumnSelectField[]",
		"predecessorType" => "SearchColumnStringField[]",
		"remainingQuantity" => "SearchColumnDoubleField[]",
		"runRate" => "SearchColumnDoubleField[]",
		"runTime" => "SearchColumnDoubleField[]",
		"sequence" => "SearchColumnLongField[]",
		"setupTime" => "SearchColumnDoubleField[]",
		"startDate" => "SearchColumnDateField[]",
		"status" => "SearchColumnSelectField[]",
		"workOrder" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

