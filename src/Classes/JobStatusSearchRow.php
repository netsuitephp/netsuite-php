<?php namespace Fungku\NetSuite\Classes;

class JobStatusSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "JobStatusSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

