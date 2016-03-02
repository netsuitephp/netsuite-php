<?php

namespace Fungku\NetSuite\Classes;

class CalendarEventSearchRow extends SearchRow {
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
		"basic" => "CalendarEventSearchRowBasic",
		"attendeeJoin" => "EntitySearchRowBasic",
		"attendeeContactJoin" => "ContactSearchRowBasic",
		"attendeeCustomerJoin" => "CustomerSearchRowBasic",
		"caseJoin" => "SupportCaseSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"opportunityJoin" => "OpportunitySearchRowBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
		"timeJoin" => "TimeBillSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

