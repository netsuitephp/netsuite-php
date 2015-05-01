<?php namespace Fungku\NetSuite\Classes;

class ItemMember {
	public $memberDescr;
	public $componentYield;
	public $bomQuantity;
	public $quantity;
	public $memberUnit;
	public $vsoeDeferral;
	public $vsoePermitDiscount;
	public $vsoeDelivered;
	public $taxSchedule;
	public $taxcode;
	public $item;
	public $taxrate;
	public $effectiveDate;
	public $obsoleteDate;
	public $effectiveRevision;
	public $obsoleteRevision;
	public $lineNumber;
	public $memberKey;
	static $paramtypesmap = array(
		"memberDescr" => "string",
		"componentYield" => "float",
		"bomQuantity" => "float",
		"quantity" => "float",
		"memberUnit" => "string",
		"vsoeDeferral" => "VsoeDeferral",
		"vsoePermitDiscount" => "VsoePermitDiscount",
		"vsoeDelivered" => "boolean",
		"taxSchedule" => "RecordRef",
		"taxcode" => "string",
		"item" => "RecordRef",
		"taxrate" => "float",
		"effectiveDate" => "dateTime",
		"obsoleteDate" => "dateTime",
		"effectiveRevision" => "RecordRef",
		"obsoleteRevision" => "RecordRef",
		"lineNumber" => "integer",
		"memberKey" => "string",
	);
}

