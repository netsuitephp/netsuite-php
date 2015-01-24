<?php namespace Fungku\NetSuite\Classes;

class CalendarEventSearch extends SearchRecord {
	public $basic;
	public $attendeeJoin;
	public $attendeeContactJoin;
	public $attendeeCustomerJoin;
	public $caseJoin;
	public $fileJoin;
	public $opportunityJoin;
	public $originatingLeadJoin;
	public $timeJoin;
	public $transactionJoin;
	public $userJoin;
	public $userNotesJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "CalendarEventSearchBasic",
		"attendeeJoin" => "EntitySearchBasic",
		"attendeeContactJoin" => "ContactSearchBasic",
		"attendeeCustomerJoin" => "CustomerSearchBasic",
		"caseJoin" => "SupportCaseSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"opportunityJoin" => "OpportunitySearchBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchBasic",
		"timeJoin" => "TimeBillSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

