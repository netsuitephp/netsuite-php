<?php

class ManufacturingOperationTask extends Record {
	public $customForm;
	public $manufacturingWorkCenter;
	public $manufacturingCostTemplate;
	public $title;
	public $operationSequence;
	public $workOrder;
	public $order;
	public $status;
	public $message;
	public $estimatedWork;
	public $actualWork;
	public $remainingWork;
	public $inputQuantity;
	public $completedQuantity;
	public $setupTime;
	public $runRate;
	public $startDate;
	public $endDate;
	public $autoCalculateLag;
	public $machineResources;
	public $laborResources;
	public $costDetailList;
	public $predecessorList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"manufacturingWorkCenter" => "RecordRef",
		"manufacturingCostTemplate" => "RecordRef",
		"title" => "string",
		"operationSequence" => "integer",
		"workOrder" => "RecordRef",
		"order" => "RecordRef",
		"status" => "ManufacturingOperationTaskStatus",
		"message" => "string",
		"estimatedWork" => "float",
		"actualWork" => "float",
		"remainingWork" => "float",
		"inputQuantity" => "float",
		"completedQuantity" => "float",
		"setupTime" => "float",
		"runRate" => "float",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"autoCalculateLag" => "boolean",
		"machineResources" => "integer",
		"laborResources" => "integer",
		"costDetailList" => "ManufacturingCostDetailList",
		"predecessorList" => "ManufacturingOperationTaskPredecessorList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

