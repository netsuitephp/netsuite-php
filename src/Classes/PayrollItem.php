<?php

class PayrollItem extends Record {
	public $subsidiary;
	public $itemType;
	public $name;
	public $vendor;
	public $expenseAccount;
	public $liabilityAccount;
	public $employeePaid;
	public $inactive;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"subsidiary" => "RecordRef",
		"itemType" => "RecordRef",
		"name" => "string",
		"vendor" => "RecordRef",
		"expenseAccount" => "RecordRef",
		"liabilityAccount" => "RecordRef",
		"employeePaid" => "boolean",
		"inactive" => "boolean",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

