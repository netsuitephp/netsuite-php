<?php namespace Fungku\NetSuite\Classes;

class SalesRoleSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "SalesRoleSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

