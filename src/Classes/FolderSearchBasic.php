<?php

namespace Fungku\NetSuite\Classes;

class FolderSearchBasic extends SearchRecordBasic {
	public $class;
	public $department;
	public $description;
	public $externalId;
	public $externalIdString;
	public $group;
	public $internalId;
	public $internalIdNumber;
	public $isInactive;
	public $isTopLevel;
	public $lastModifiedDate;
	public $location;
	public $name;
	public $numFiles;
	public $owner;
	public $parent;
	public $predecessor;
	public $private;
	public $size;
	public $subsidiary;
	static $paramtypesmap = array(
		"class" => "SearchMultiSelectField",
		"department" => "SearchMultiSelectField",
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"group" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isTopLevel" => "SearchBooleanField",
		"lastModifiedDate" => "SearchDateField",
		"location" => "SearchMultiSelectField",
		"name" => "SearchStringField",
		"numFiles" => "SearchLongField",
		"owner" => "SearchMultiSelectField",
		"parent" => "SearchMultiSelectField",
		"predecessor" => "SearchMultiSelectField",
		"private" => "SearchBooleanField",
		"size" => "SearchLongField",
		"subsidiary" => "SearchMultiSelectField",
	);
}

