<?php namespace Fungku\NetSuite\Classes;

class ManufacturingCostTemplate extends Record {
	public $customForm;
	public $subsidiary;
	public $name;
	public $memo;
	public $isInactive;
	public $costDetailList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"subsidiary" => "RecordRef",
		"name" => "string",
		"memo" => "string",
		"isInactive" => "boolean",
		"costDetailList" => "ManufacturingCostDetailList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

