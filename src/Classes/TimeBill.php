<?php

namespace Fungku\NetSuite\Classes;

class TimeBill extends Record {
	public $customForm;
	public $employee;
	public $tranDate;
	public $customer;
	public $caseTaskEvent;
	public $isBillable;
	public $payrollItem;
	public $paidExternally;
	public $workplace;
	public $item;
	public $department;
	public $class;
	public $location;
	public $hours;
	public $price;
	public $timeType;
	public $rate;
	public $overrideRate;
	public $temporaryLocalJurisdiction;
	public $temporaryStateJurisdiction;
	public $memo;
	public $subsidiary;
	public $supervisorApproval;
	public $createdDate;
	public $lastModifiedDate;
	public $status;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"employee" => "RecordRef",
		"tranDate" => "dateTime",
		"customer" => "RecordRef",
		"caseTaskEvent" => "RecordRef",
		"isBillable" => "boolean",
		"payrollItem" => "RecordRef",
		"paidExternally" => "boolean",
		"workplace" => "RecordRef",
		"item" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"hours" => "Duration",
		"price" => "RecordRef",
		"timeType" => "TimeBillTimeType",
		"rate" => "float",
		"overrideRate" => "boolean",
		"temporaryLocalJurisdiction" => "RecordRef",
		"temporaryStateJurisdiction" => "RecordRef",
		"memo" => "string",
		"subsidiary" => "RecordRef",
		"supervisorApproval" => "boolean",
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"status" => "string",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

