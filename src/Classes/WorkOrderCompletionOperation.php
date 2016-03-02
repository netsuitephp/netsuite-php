<?php

namespace Fungku\NetSuite\Classes;

class WorkOrderCompletionOperation {
	public $operationSequence;
	public $operationName;
	public $workCenter;
	public $machineResources;
	public $laborResources;
	public $inputQuantity;
	public $quantityRemaining;
	public $predecessorCompletedQuantity;
	public $completedQuantity;
	public $recordSetup;
	public $machineSetupTime;
	public $laborSetupTime;
	public $machineRunTime;
	public $laborRunTime;
	static $paramtypesmap = array(
		"operationSequence" => "integer",
		"operationName" => "string",
		"workCenter" => "string",
		"machineResources" => "integer",
		"laborResources" => "integer",
		"inputQuantity" => "float",
		"quantityRemaining" => "float",
		"predecessorCompletedQuantity" => "float",
		"completedQuantity" => "float",
		"recordSetup" => "boolean",
		"machineSetupTime" => "float",
		"laborSetupTime" => "float",
		"machineRunTime" => "float",
		"laborRunTime" => "float",
	);
}

