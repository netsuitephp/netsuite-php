<?php

namespace Fungku\NetSuite\Classes;

class ItemRevisionSearchRowBasic extends SearchRowBasic {
	public $effectiveDate;
	public $externalId;
	public $internalId;
	public $isInactive;
	public $item;
	public $memo;
	public $name;
	public $obsoleteDate;
	static $paramtypesmap = array(
		"effectiveDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"item" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"obsoleteDate" => "SearchColumnDateField[]",
	);
}

