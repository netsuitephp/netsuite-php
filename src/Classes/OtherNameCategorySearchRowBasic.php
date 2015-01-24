<?php namespace Fungku\NetSuite\Classes;

class OtherNameCategorySearchRowBasic extends SearchRowBasic {
	public $externalId;
	public $internalId;
	public $isInactive;
	public $name;
	static $paramtypesmap = array(
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
}

