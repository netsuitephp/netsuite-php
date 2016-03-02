<?php

namespace Fungku\NetSuite\Classes;

class CustomRecordSearchRowBasic extends SearchRowBasic {
	public $recType;
	public $altName;
	public $availableOffline;
	public $created;
	public $externalId;
	public $id;
	public $internalId;
	public $isInactive;
	public $lastModified;
	public $lastModifiedBy;
	public $name;
	public $owner;
	public $parent;
	public $customFieldList;
	static $paramtypesmap = array(
		"recType" => "RecordRef",
		"altName" => "SearchColumnStringField[]",
		"availableOffline" => "SearchColumnBooleanField[]",
		"created" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnSelectField[]",
		"id" => "SearchColumnLongField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"lastModified" => "SearchColumnDateField[]",
		"lastModifiedBy" => "SearchColumnSelectField[]",
		"name" => "SearchColumnStringField[]",
		"owner" => "SearchColumnSelectField[]",
		"parent" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

