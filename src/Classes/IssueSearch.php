<?php

namespace Fungku\NetSuite\Classes;

class IssueSearch extends SearchRecord {
	public $basic;
	public $caseJoin;
	public $employeeJoin;
	public $fileJoin;
	public $userJoin;
	public $userNotesJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "IssueSearchBasic",
		"caseJoin" => "SupportCaseSearchBasic",
		"employeeJoin" => "EmployeeSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

