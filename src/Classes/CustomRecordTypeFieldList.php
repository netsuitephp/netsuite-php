<?php namespace Fungku\NetSuite\Classes;

class CustomRecordTypeFieldList {
	public $customField;
	public $replaceAll;
	static $paramtypesmap = array(
		"customField" => "CustomRecordCustomField[]",
		"replaceAll" => "boolean",
	);
}

