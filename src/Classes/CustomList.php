<?php namespace Fungku\NetSuite\Classes;

class CustomList extends Record {
	public $name;
	public $owner;
	public $isOrdered;
	public $description;
	public $isMatrixOption;
	public $scriptId;
	public $convertToCustomRecord;
	public $isInactive;
	public $customValueList;
	public $translationsList;
	public $internalId;
	static $paramtypesmap = array(
		"name" => "string",
		"owner" => "RecordRef",
		"isOrdered" => "boolean",
		"description" => "string",
		"isMatrixOption" => "boolean",
		"scriptId" => "string",
		"convertToCustomRecord" => "boolean",
		"isInactive" => "boolean",
		"customValueList" => "CustomListCustomValueList",
		"translationsList" => "CustomListTranslationsList",
		"internalId" => "string",
	);
}

