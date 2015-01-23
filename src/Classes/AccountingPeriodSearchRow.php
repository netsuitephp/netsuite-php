<?php

class AccountingPeriodSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	public $userNotesJoin;
	static $paramtypesmap = array(
		"basic" => "AccountingPeriodSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
	);
}

