<?php

namespace Fungku\NetSuite\Classes;

class ManufacturingOperationTaskPredecessor {
	public $task;
	public $type;
	public $startDate;
	public $endDate;
	public $lagType;
	public $lagAmount;
	public $lagUnits;
	static $paramtypesmap = array(
		"task" => "RecordRef",
		"type" => "ManufacturingOperationTaskPredecessorPredecessorType",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"lagType" => "ManufacturingLagType",
		"lagAmount" => "integer",
		"lagUnits" => "string",
	);
}

