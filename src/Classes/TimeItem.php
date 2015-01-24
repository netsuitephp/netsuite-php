<?php namespace Fungku\NetSuite\Classes;

class TimeItem {
	public $id;
	public $employee;
	public $timeType;
	public $tranDate;
	public $customer;
	public $isBillable;
	public $payrollItem;
	public $item;
	public $temporaryLocalJurisdiction;
	public $temporaryStateJurisdiction;
	public $department;
	public $class;
	public $location;
	public $hours;
	public $price;
	public $rate;
	public $overrideRate;
	public $hoursTotal;
	public $caseTaskEvent;
	public $memo;
	public $isUtilized;
	public $isProductive;
	public $isExempt;
	static $paramtypesmap = array(
		"id" => "integer",
		"employee" => "RecordRef",
		"timeType" => "TimeItemTimeType",
		"tranDate" => "dateTime",
		"customer" => "RecordRef",
		"isBillable" => "boolean",
		"payrollItem" => "RecordRef",
		"item" => "RecordRef",
		"temporaryLocalJurisdiction" => "RecordRef",
		"temporaryStateJurisdiction" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"hours" => "Duration",
		"price" => "RecordRef",
		"rate" => "float",
		"overrideRate" => "boolean",
		"hoursTotal" => "Duration",
		"caseTaskEvent" => "RecordRef",
		"memo" => "string",
		"isUtilized" => "boolean",
		"isProductive" => "boolean",
		"isExempt" => "boolean",
	);
}

