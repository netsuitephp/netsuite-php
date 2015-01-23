<?php

class Folder extends Record {
	public $name;
	public $department;
	public $description;
	public $isInactive;
	public $isPrivate;
	public $bundleable;
	public $hideInBundle;
	public $isOnline;
	public $group;
	public $parent;
	public $folderType;
	public $class;
	public $location;
	public $subsidiary;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"department" => "RecordRef",
		"description" => "string",
		"isInactive" => "boolean",
		"isPrivate" => "boolean",
		"bundleable" => "boolean",
		"hideInBundle" => "boolean",
		"isOnline" => "boolean",
		"group" => "RecordRef",
		"parent" => "RecordRef",
		"folderType" => "FolderFolderType",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"internalId" => "string",
		"externalId" => "string",
	);
}

