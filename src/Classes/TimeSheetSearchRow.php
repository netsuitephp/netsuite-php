<?php

namespace Fungku\NetSuite\Classes;

class TimeSheetSearchRow extends SearchRow {
	public $basic;
	public $employeeJoin;
	public $timeEntryJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "TimeSheetSearchRowBasic",
		"employeeJoin" => "EmployeeSearchRowBasic",
		"timeEntryJoin" => "TimeEntrySearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

