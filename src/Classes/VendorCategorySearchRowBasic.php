<?php

namespace Fungku\NetSuite\Classes;

class VendorCategorySearchRowBasic extends SearchRowBasic {
	public $externalId;
	public $internalId;
	public $isInactive;
	public $isTaxAgency;
	public $name;
	static $paramtypesmap = array(
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isTaxAgency" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
}

