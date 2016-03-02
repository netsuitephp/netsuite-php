<?php

namespace Fungku\NetSuite\Classes;

class PayrollItemSearchRowBasic extends SearchRowBasic {
	public $externalId;
	public $internalId;
	public $expenseAccount;
	public $isInactive;
	public $itemTypeNoHierarchy;
	public $liabilityAccount;
	public $name;
	public $vendor;
	public $customFieldList;
	static $paramtypesmap = array(
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"expenseAccount" => "SearchColumnStringField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"itemTypeNoHierarchy" => "SearchColumnStringField[]",
		"liabilityAccount" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"vendor" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

