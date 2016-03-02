<?php

namespace Fungku\NetSuite\Classes;

class EmployeeEarning {
	public $payrollItem;
	public $payRate;
	public $primaryEarning;
	public $defaultHours;
	public $inactive;
	public $defaultEarning;
	public $effectiveDate;
	public $expirationDate;
	static $paramtypesmap = array(
		"payrollItem" => "RecordRef",
		"payRate" => "string",
		"primaryEarning" => "boolean",
		"defaultHours" => "float",
		"inactive" => "boolean",
		"defaultEarning" => "boolean",
		"effectiveDate" => "dateTime",
		"expirationDate" => "dateTime",
	);
}

