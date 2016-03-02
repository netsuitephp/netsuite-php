<?php

namespace Fungku\NetSuite\Classes;

class CustomRecordSearchBasic extends SearchRecordBasic {
	public $recType;
	public $availableOffline;
	public $created;
	public $externalId;
	public $externalIdString;
	public $id;
	public $internalId;
	public $internalIdNumber;
	public $isInactive;
	public $lastModified;
	public $lastModifiedBy;
	public $name;
	public $owner;
	public $parent;
	public $customFieldList;
	static $paramtypesmap = array(
		"recType" => "RecordRef",
		"availableOffline" => "SearchBooleanField",
		"created" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"id" => "SearchLongField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"lastModified" => "SearchDateField",
		"lastModifiedBy" => "SearchMultiSelectField",
		"name" => "SearchStringField",
		"owner" => "SearchMultiSelectField",
		"parent" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

