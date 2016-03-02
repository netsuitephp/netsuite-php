<?php

namespace Fungku\NetSuite\Classes;

class EntityGroupSearchRowBasic extends SearchRowBasic {
	public $email;
	public $externalId;
	public $groupName;
	public $groupType;
	public $internalId;
	public $isDynamic;
	public $isInactive;
	public $isManufacturingWorkCenter;
	public $isPrivate;
	public $laborResources;
	public $lastModifiedDate;
	public $machineResources;
	public $owner;
	public $savedSearch;
	public $size;
	public $subsidiary;
	public $workCalendar;
	public $customFieldList;
	static $paramtypesmap = array(
		"email" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnStringField[]",
		"groupName" => "SearchColumnStringField[]",
		"groupType" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isDynamic" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isManufacturingWorkCenter" => "SearchColumnBooleanField[]",
		"isPrivate" => "SearchColumnBooleanField[]",
		"laborResources" => "SearchColumnLongField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"machineResources" => "SearchColumnLongField[]",
		"owner" => "SearchColumnSelectField[]",
		"savedSearch" => "SearchColumnStringField[]",
		"size" => "SearchColumnLongField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"workCalendar" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

