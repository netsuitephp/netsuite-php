<?php namespace Fungku\NetSuite\Classes;

class ContactRoleSearchBasic extends SearchRecordBasic {
	public $description;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $isInactive;
	public $name;
	static $paramtypesmap = array(
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
	);
}

