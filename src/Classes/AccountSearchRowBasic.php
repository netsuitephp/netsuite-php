<?php

class AccountSearchRowBasic extends SearchRowBasic {
	public $balance;
	public $cashFlowRateType;
	public $category1099Misc;
	public $description;
	public $externalId;
	public $generalRateType;
	public $internalId;
	public $isInactive;
	public $name;
	public $number;
	public $subsidiary;
	public $type;
	public $customFieldList;
	static $paramtypesmap = array(
		"balance" => "SearchColumnDoubleField[]",
		"cashFlowRateType" => "SearchColumnEnumSelectField[]",
		"category1099Misc" => "SearchColumnSelectField[]",
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"generalRateType" => "SearchColumnEnumSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"number" => "SearchColumnStringField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"type" => "SearchColumnEnumSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

