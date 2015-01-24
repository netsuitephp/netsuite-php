<?php namespace Fungku\NetSuite\Classes;

class ManufacturingRouting extends Record {
	public $customForm;
	public $subsidiary;
	public $item;
	public $locationList;
	public $name;
	public $memo;
	public $isDefault;
	public $isInactive;
	public $autoCalculateLag;
	public $routingStepList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"subsidiary" => "RecordRef",
		"item" => "RecordRef",
		"locationList" => "RecordRefList",
		"name" => "string",
		"memo" => "string",
		"isDefault" => "boolean",
		"isInactive" => "boolean",
		"autoCalculateLag" => "boolean",
		"routingStepList" => "ManufacturingRoutingRoutingStepList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

