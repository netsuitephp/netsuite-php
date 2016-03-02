<?php

namespace Fungku\NetSuite\Classes;

class EmployeeCompanyContribution {
	public $payrollItem;
	public $rate;
	public $limit;
	public $inactive;
	public $effectiveDate;
	public $expirationDate;
	static $paramtypesmap = array(
		"payrollItem" => "RecordRef",
		"rate" => "string",
		"limit" => "float",
		"inactive" => "boolean",
		"effectiveDate" => "dateTime",
		"expirationDate" => "dateTime",
	);
}

