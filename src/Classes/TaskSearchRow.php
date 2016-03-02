<?php

namespace Fungku\NetSuite\Classes;

class TaskSearchRow extends SearchRow {
	public $basic;
	public $caseJoin;
	public $companyCustomerJoin;
	public $contactJoin;
	public $employeeJoin;
	public $fileJoin;
	public $jobJoin;
	public $opportunityJoin;
	public $originatingLeadJoin;
	public $timeJoin;
	public $transactionJoin;
	public $userJoin;
	public $userNotesJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "TaskSearchRowBasic",
		"caseJoin" => "SupportCaseSearchRowBasic",
		"companyCustomerJoin" => "CustomerSearchRowBasic",
		"contactJoin" => "ContactSearchRowBasic",
		"employeeJoin" => "EmployeeSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"jobJoin" => "JobSearchRowBasic",
		"opportunityJoin" => "OpportunitySearchRowBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
		"timeJoin" => "TimeBillSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

