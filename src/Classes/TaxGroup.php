<?php

namespace Fungku\NetSuite\Classes;

class TaxGroup extends Record {
	public $itemId;
	public $description;
	public $state;
	public $subsidiaryList;
	public $taxitem1;
	public $unitprice1;
	public $taxitem2;
	public $unitprice2;
	public $piggyback;
	public $isInactive;
	public $rate;
	public $taxType;
	public $includeChildren;
	public $county;
	public $city;
	public $zip;
	public $nexusCountry;
	public $isDefault;
	public $taxItemList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"itemId" => "string",
		"description" => "string",
		"state" => "string",
		"subsidiaryList" => "RecordRefList",
		"taxitem1" => "RecordRef",
		"unitprice1" => "string",
		"taxitem2" => "RecordRef",
		"unitprice2" => "string",
		"piggyback" => "boolean",
		"isInactive" => "boolean",
		"rate" => "float",
		"taxType" => "RecordRef",
		"includeChildren" => "boolean",
		"county" => "string",
		"city" => "string",
		"zip" => "string",
		"nexusCountry" => "RecordRef",
		"isDefault" => "boolean",
		"taxItemList" => "TaxGroupTaxItemList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

