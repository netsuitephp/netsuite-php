<?php

class SupportCaseSearch extends SearchRecord {
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
		"basic" => "SupportCaseSearchBasic",
		"companyJoin" => "EntitySearchBasic",
		"contactJoin" => "ContactSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"employeeJoin" => "EmployeeSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"issueJoin" => "IssueSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"messagesJoin" => "MessageSearchBasic",
		"timeJoin" => "TimeBillSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

