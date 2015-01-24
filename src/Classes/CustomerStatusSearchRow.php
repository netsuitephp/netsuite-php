<?php namespace Fungku\NetSuite\Classes;

class CustomerStatusSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "CustomerStatusSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

