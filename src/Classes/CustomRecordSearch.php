<?php

namespace Fungku\NetSuite\Classes;

class CustomRecordSearch extends SearchRecord {
	public $basic;
	public $fileJoin;
	public $messagesJoin;
	public $ownerJoin;
	public $userJoin;
	public $userNotesJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "CustomRecordSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"messagesJoin" => "MessageSearchBasic",
		"ownerJoin" => "EmployeeSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

