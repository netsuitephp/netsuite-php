<?php

class SupportCaseSearchRow extends SearchRow {
	public $basic;
	public $companyJoin;
	public $contactJoin;
	public $customerJoin;
	public $employeeJoin;
	public $fileJoin;
	public $issueJoin;
	public $itemJoin;
	public $messagesJoin;
	public $timeJoin;
	public $transactionJoin;
	public $userJoin;
	public $userNotesJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "SupportCaseSearchRowBasic",
		"companyJoin" => "EntitySearchRowBasic",
		"contactJoin" => "ContactSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"employeeJoin" => "EmployeeSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"issueJoin" => "IssueSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"messagesJoin" => "MessageSearchRowBasic",
		"timeJoin" => "TimeBillSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

