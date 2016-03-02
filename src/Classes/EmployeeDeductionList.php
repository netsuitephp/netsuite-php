<?php

namespace Fungku\NetSuite\Classes;

class EmployeeDeductionList {
	public $employeeDeduction;
	public $replaceAll;
	static $paramtypesmap = array(
		"employeeDeduction" => "EmployeeDeduction[]",
		"replaceAll" => "boolean",
	);
}

