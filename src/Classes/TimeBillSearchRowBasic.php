<?php

namespace Fungku\NetSuite\Classes;

class TimeBillSearchRowBasic extends SearchRowBasic {
	public $break;
	public $class;
	public $customer;
	public $date;
	public $dateCreated;
	public $department;
	public $durationDecimal;
	public $employee;
	public $endTime;
	public $externalId;
	public $hours;
	public $internalId;
	public $isBillable;
	public $isExempt;
	public $isProductive;
	public $isUtilized;
	public $item;
	public $lastModified;
	public $location;
	public $memo;
	public $paidExternally;
	public $payItem;
	public $payrollDate;
	public $rate;
	public $startTime;
	public $status;
	public $subsidiary;
	public $supervisorApproval;
	public $temporaryLocalJurisdiction;
	public $temporaryStateJurisdiction;
	public $type;
	public $customFieldList;
	static $paramtypesmap = array(
		"break" => "SearchColumnStringField[]",
		"class" => "SearchColumnSelectField[]",
		"customer" => "SearchColumnSelectField[]",
		"date" => "SearchColumnDateField[]",
		"dateCreated" => "SearchColumnDateField[]",
		"department" => "SearchColumnSelectField[]",
		"durationDecimal" => "SearchColumnDoubleField[]",
		"employee" => "SearchColumnSelectField[]",
		"endTime" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnStringField[]",
		"hours" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isBillable" => "SearchColumnBooleanField[]",
		"isExempt" => "SearchColumnBooleanField[]",
		"isProductive" => "SearchColumnBooleanField[]",
		"isUtilized" => "SearchColumnBooleanField[]",
		"item" => "SearchColumnStringField[]",
		"lastModified" => "SearchColumnDateField[]",
		"location" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"paidExternally" => "SearchColumnBooleanField[]",
		"payItem" => "SearchColumnSelectField[]",
		"payrollDate" => "SearchColumnDateField[]",
		"rate" => "SearchColumnDoubleField[]",
		"startTime" => "SearchColumnDateField[]",
		"status" => "SearchColumnStringField[]",
		"subsidiary" => "SearchColumnStringField[]",
		"supervisorApproval" => "SearchColumnBooleanField[]",
		"temporaryLocalJurisdiction" => "SearchColumnStringField[]",
		"temporaryStateJurisdiction" => "SearchColumnStringField[]",
		"type" => "SearchColumnEnumSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

