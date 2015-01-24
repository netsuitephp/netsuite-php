<?php namespace Fungku\NetSuite\Classes;

class FolderSearchRowBasic extends SearchRowBasic {
	public $class;
	public $department;
	public $description;
	public $externalId;
	public $folderSize;
	public $group;
	public $internalId;
	public $isInactive;
	public $lastModifiedDate;
	public $location;
	public $name;
	public $numFiles;
	public $owner;
	public $parent;
	public $subsidiary;
	static $paramtypesmap = array(
		"class" => "SearchColumnSelectField[]",
		"department" => "SearchColumnSelectField[]",
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnStringField[]",
		"folderSize" => "SearchColumnLongField[]",
		"group" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"location" => "SearchColumnSelectField[]",
		"name" => "SearchColumnStringField[]",
		"numFiles" => "SearchColumnLongField[]",
		"owner" => "SearchColumnSelectField[]",
		"parent" => "SearchColumnSelectField[]",
		"subsidiary" => "SearchColumnSelectField[]",
	);
}

