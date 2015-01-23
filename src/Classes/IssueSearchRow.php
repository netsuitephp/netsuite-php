<?php

class IssueSearchRow extends SearchRow {
	public $basic;
	public $caseJoin;
	public $employeeJoin;
	public $fileJoin;
	public $userJoin;
	public $userNotesJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "IssueSearchRowBasic",
		"caseJoin" => "SupportCaseSearchRowBasic",
		"employeeJoin" => "EmployeeSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

