<?php namespace Fungku\NetSuite\Classes;

class CustomListSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "CustomListSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

