<?php

namespace Fungku\NetSuite\Classes;

class UnitsTypeSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "UnitsTypeSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

