<?php

class TaskSearch extends SearchRecord {
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
		"basic" => "TaskSearchBasic",
		"caseJoin" => "SupportCaseSearchBasic",
		"companyCustomerJoin" => "CustomerSearchBasic",
		"contactJoin" => "ContactSearchBasic",
		"employeeJoin" => "EmployeeSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"jobJoin" => "JobSearchBasic",
		"opportunityJoin" => "OpportunitySearchBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchBasic",
		"timeJoin" => "TimeBillSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

