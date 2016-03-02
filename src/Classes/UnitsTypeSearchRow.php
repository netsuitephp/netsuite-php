<?php

namespace Fungku\NetSuite\Classes;

class UnitsTypeSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "UnitsTypeSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

