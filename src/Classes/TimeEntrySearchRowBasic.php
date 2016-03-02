<?php

namespace Fungku\NetSuite\Classes;

class TimeEntrySearchRowBasic extends SearchRowBasic {
	public $approvalStatus;
	public $billingClass;
	public $billingStatus;
	public $break;
	public $caseTaskEvent;
	public $class;
	public $classNoHierarchy;
	public $customer;
	public $date;
	public $dateCreated;
	public $department;
	public $departmentNoHierarchy;
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
	public $locationNoHierarchy;
	public $memo;
	public $nextApprover;
	public $paidExternally;
	public $payItem;
	public $payrollDate;
	public $rate;
	public $startTime;
	public $subsidiary;
	public $subsidiaryNoHierarchy;
	public $timeSheet;
	public $type;
	public $customFieldList;
	static $paramtypesmap = array(
		"approvalStatus" => "SearchColumnSelectField[]",
		"billingClass" => "SearchColumnSelectField[]",
		"billingStatus" => "SearchColumnStringField[]",
		"break" => "SearchColumnStringField[]",
		"caseTaskEvent" => "SearchColumnSelectField[]",
		"class" => "SearchColumnSelectField[]",
		"classNoHierarchy" => "SearchColumnSelectField[]",
		"customer" => "SearchColumnSelectField[]",
		"date" => "SearchColumnDateField[]",
		"dateCreated" => "SearchColumnDateField[]",
		"department" => "SearchColumnSelectField[]",
		"departmentNoHierarchy" => "SearchColumnSelectField[]",
		"durationDecimal" => "SearchColumnDoubleField[]",
		"employee" => "SearchColumnSelectField[]",
		"endTime" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnStringField[]",
		"hours" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnLongField[]",
		"isBillable" => "SearchColumnBooleanField[]",
		"isExempt" => "SearchColumnBooleanField[]",
		"isProductive" => "SearchColumnBooleanField[]",
		"isUtilized" => "SearchColumnBooleanField[]",
		"item" => "SearchColumnStringField[]",
		"lastModified" => "SearchColumnDateField[]",
		"location" => "SearchColumnSelectField[]",
		"locationNoHierarchy" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"nextApprover" => "SearchColumnSelectField[]",
		"paidExternally" => "SearchColumnBooleanField[]",
		"payItem" => "SearchColumnSelectField[]",
		"payrollDate" => "SearchColumnDateField[]",
		"rate" => "SearchColumnDoubleField[]",
		"startTime" => "SearchColumnDateField[]",
		"subsidiary" => "SearchColumnStringField[]",
		"subsidiaryNoHierarchy" => "SearchColumnStringField[]",
		"timeSheet" => "SearchColumnStringField[]",
		"type" => "SearchColumnEnumSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

