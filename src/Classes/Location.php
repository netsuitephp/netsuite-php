<?php

class Location extends Record {
	public $name;
	public $parent;
	public $includeChildren;
	public $subsidiaryList;
	public $isInactive;
	public $tranPrefix;
	public $mainAddress;
	public $returnAddress;
	public $logo;
	public $makeInventoryAvailable;
	public $makeInventoryAvailableStore;
	public $classTranslationList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"parent" => "RecordRef",
		"includeChildren" => "boolean",
		"subsidiaryList" => "RecordRefList",
		"isInactive" => "boolean",
		"tranPrefix" => "string",
		"mainAddress" => "Address",
		"returnAddress" => "Address",
		"logo" => "RecordRef",
		"makeInventoryAvailable" => "boolean",
		"makeInventoryAvailableStore" => "boolean",
		"classTranslationList" => "ClassTranslationList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

