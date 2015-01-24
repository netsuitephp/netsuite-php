<?php namespace Fungku\NetSuite\Classes;

class CustomListSearchBasic extends SearchRecordBasic {
	public $description;
	public $internalId;
	public $internalIdNumber;
	public $isInactive;
	public $isOrdered;
	public $name;
	public $owner;
	public $scriptId;
	static $paramtypesmap = array(
		"description" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isOrdered" => "SearchBooleanField",
		"name" => "SearchStringField",
		"owner" => "SearchMultiSelectField",
		"scriptId" => "SearchStringField",
	);
}

