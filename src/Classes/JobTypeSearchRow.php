<?php namespace Fungku\NetSuite\Classes;

class JobTypeSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "JobTypeSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

