<?php namespace Fungku\NetSuite\Classes;

class PhoneCallSearchRow extends SearchRow {
	public $basic;
	public $caseJoin;
	public $companyCustomerJoin;
	public $contactJoin;
	public $employeeJoin;
	public $fileJoin;
	public $opportunityJoin;
	public $originatingLeadJoin;
	public $participantJoin;
	public $transactionJoin;
	public $userJoin;
	public $userNotesJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "PhoneCallSearchRowBasic",
		"caseJoin" => "SupportCaseSearchRowBasic",
		"companyCustomerJoin" => "CustomerSearchRowBasic",
		"contactJoin" => "ContactSearchRowBasic",
		"employeeJoin" => "EmployeeSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"opportunityJoin" => "OpportunitySearchRowBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
		"participantJoin" => "EntitySearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

