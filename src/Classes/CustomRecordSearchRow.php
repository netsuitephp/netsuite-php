<?php namespace Fungku\NetSuite\Classes;

class CustomRecordSearchRow extends SearchRow {
	public $basic;
	public $fileJoin;
	public $messagesJoin;
	public $ownerJoin;
	public $userJoin;
	public $userNotesJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "CustomRecordSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"messagesJoin" => "MessageSearchRowBasic",
		"ownerJoin" => "EmployeeSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

