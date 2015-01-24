<?php namespace Fungku\NetSuite\Classes;

class Department extends Record {
	public $name;
	public $includeChildren;
	public $parent;
	public $isInactive;
	public $classTranslationList;
	public $subsidiaryList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"includeChildren" => "boolean",
		"parent" => "RecordRef",
		"isInactive" => "boolean",
		"classTranslationList" => "ClassTranslationList",
		"subsidiaryList" => "RecordRefList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

