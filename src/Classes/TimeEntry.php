<?php

namespace Fungku\NetSuite\Classes;

class TimeEntry extends Record {
	public $hours;
	public $createdDate;
	public $lastModifiedDate;
	public $customer;
	public $caseTaskEvent;
	public $item;
	public $isBillable;
	public $payrollItem;
	public $paidExternally;
	public $price;
	public $rate;
	public $overrideRate;
	public $memo;
	public $department;
	public $class;
	public $location;
	public $billingClass;
	public $subsidiary;
	public $approvalStatus;
	public $timeType;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"hours" => "Duration",
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customer" => "RecordRef",
		"caseTaskEvent" => "RecordRef",
		"item" => "RecordRef",
		"isBillable" => "boolean",
		"payrollItem" => "RecordRef",
		"paidExternally" => "boolean",
		"price" => "RecordRef",
		"rate" => "float",
		"overrideRate" => "boolean",
		"memo" => "string",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"billingClass" => "string",
		"subsidiary" => "RecordRef",
		"approvalStatus" => "RecordRef",
		"timeType" => "TimeBillTimeType",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

