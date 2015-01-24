<?php namespace Fungku\NetSuite\Classes;

class DepartmentSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "DepartmentSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

