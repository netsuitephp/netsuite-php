<?php namespace Fungku\NetSuite\Classes;

class TimeSheetSearch extends SearchRecord {
	public $basic;
	public $employeeJoin;
	public $timeEntryJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "TimeSheetSearchBasic",
		"employeeJoin" => "EmployeeSearchBasic",
		"timeEntryJoin" => "TimeEntrySearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

