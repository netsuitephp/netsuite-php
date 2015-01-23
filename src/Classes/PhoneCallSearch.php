<?php

class PhoneCallSearch extends SearchRecord {
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
		"basic" => "PhoneCallSearchBasic",
		"caseJoin" => "SupportCaseSearchBasic",
		"companyCustomerJoin" => "CustomerSearchBasic",
		"contactJoin" => "ContactSearchBasic",
		"employeeJoin" => "EmployeeSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"opportunityJoin" => "OpportunitySearchBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchBasic",
		"participantJoin" => "EntitySearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

