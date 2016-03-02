<?php

namespace Fungku\NetSuite\Classes;

class ManufacturingRoutingRoutingStep {
	public $operationSequence;
	public $operationName;
	public $manufacturingWorkCenter;
	public $machineResources;
	public $laborResources;
	public $manufacturingCostTemplate;
	public $setupTime;
	public $runRate;
	public $lagType;
	public $lagAmount;
	public $lagUnits;
	static $paramtypesmap = array(
		"operationSequence" => "integer",
		"operationName" => "string",
		"manufacturingWorkCenter" => "RecordRef",
		"machineResources" => "integer",
		"laborResources" => "integer",
		"manufacturingCostTemplate" => "RecordRef",
		"setupTime" => "float",
		"runRate" => "float",
		"lagType" => "ManufacturingLagType",
		"lagAmount" => "integer",
		"lagUnits" => "string",
	);
}

