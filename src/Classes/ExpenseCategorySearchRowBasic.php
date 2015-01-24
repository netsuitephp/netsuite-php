<?php namespace Fungku\NetSuite\Classes;

class ExpenseCategorySearchRowBasic extends SearchRowBasic {
	public $account;
	public $description;
	public $externalId;
	public $internalId;
	public $isInactive;
	public $name;
	public $rateRequired;
	public $customFieldList;
	static $paramtypesmap = array(
		"account" => "SearchColumnSelectField[]",
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"rateRequired" => "SearchColumnBooleanField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

