<?php namespace Fungku\NetSuite\Classes;

class EntityGroupSearchBasic extends SearchRecordBasic {
	public $email;
	public $externalId;
	public $externalIdString;
	public $groupName;
	public $groupOwner;
	public $groupType;
	public $internalId;
	public $internalIdNumber;
	public $isDynamic;
	public $isInactive;
	public $isManufacturingWorkCenter;
	public $isPrivate;
	public $laborResources;
	public $lastModifiedDate;
	public $machineResources;
	public $subsidiary;
	public $workCalendar;
	public $customFieldList;
	static $paramtypesmap = array(
		"email" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"groupName" => "SearchStringField",
		"groupOwner" => "SearchMultiSelectField",
		"groupType" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDynamic" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isManufacturingWorkCenter" => "SearchBooleanField",
		"isPrivate" => "SearchBooleanField",
		"laborResources" => "SearchLongField",
		"lastModifiedDate" => "SearchDateField",
		"machineResources" => "SearchLongField",
		"subsidiary" => "SearchMultiSelectField",
		"workCalendar" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

