<?php

class EmployeeSearchRow extends SearchRow {
	public $basic;
	public $campaignResponseJoin;
	public $departmentJoin;
	public $fileJoin;
	public $locationJoin;
	public $messagesJoin;
	public $messagesFromJoin;
	public $messagesToJoin;
	public $resourceAllocationJoin;
	public $subsidiaryJoin;
	public $timeJoin;
	public $transactionJoin;
	public $userJoin;
	public $userNotesJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "EmployeeSearchRowBasic",
		"campaignResponseJoin" => "CampaignSearchRowBasic",
		"departmentJoin" => "DepartmentSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"locationJoin" => "LocationSearchRowBasic",
		"messagesJoin" => "MessageSearchRowBasic",
		"messagesFromJoin" => "MessageSearchRowBasic",
		"messagesToJoin" => "MessageSearchRowBasic",
		"resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
		"subsidiaryJoin" => "SubsidiarySearchRowBasic",
		"timeJoin" => "TimeBillSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

