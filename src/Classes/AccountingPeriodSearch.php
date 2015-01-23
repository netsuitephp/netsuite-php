<?php

class AccountingPeriodSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	public $userNotesJoin;
	static $paramtypesmap = array(
		"basic" => "AccountingPeriodSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
	);
}

