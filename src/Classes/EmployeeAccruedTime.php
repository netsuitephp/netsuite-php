<?php

class EmployeeAccruedTime {
	public $payrollItem;
	public $accruedHours;
	public $accrualRate;
	public $monetaryRate;
	public $resetAccruedHoursAtYearEnd;
	public $accrualMethod;
	public $maximumAccruedHours;
	public $inactive;
	public $effectiveDate;
	public $expirationDate;
	static $paramtypesmap = array(
		"payrollItem" => "RecordRef",
		"accruedHours" => "float",
		"accrualRate" => "float",
		"monetaryRate" => "float",
		"resetAccruedHoursAtYearEnd" => "boolean",
		"accrualMethod" => "EmployeeAccruedTimeAccrualMethod",
		"maximumAccruedHours" => "float",
		"inactive" => "boolean",
		"effectiveDate" => "dateTime",
		"expirationDate" => "dateTime",
	);
}

