<?php namespace Fungku\NetSuite\Classes;

class NoteTypeSearchRowBasic extends SearchRowBasic {
	public $description;
	public $externalId;
	public $internalId;
	public $isInactive;
	public $name;
	static $paramtypesmap = array(
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
}

