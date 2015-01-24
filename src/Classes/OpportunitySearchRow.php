<?php namespace Fungku\NetSuite\Classes;

class OpportunitySearchRow extends SearchRow {
	public $basic;
	public $actualJoin;
	public $callJoin;
	public $customerJoin;
	public $decisionMakerJoin;
	public $estimateJoin;
	public $eventJoin;
	public $fileJoin;
	public $itemJoin;
	public $leadSourceJoin;
	public $messagesJoin;
	public $orderJoin;
	public $originatingLeadJoin;
	public $partnerJoin;
	public $salesRepJoin;
	public $taskJoin;
	public $userNotesJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "OpportunitySearchRowBasic",
		"actualJoin" => "TransactionSearchRowBasic",
		"callJoin" => "PhoneCallSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"decisionMakerJoin" => "ContactSearchRowBasic",
		"estimateJoin" => "TransactionSearchRowBasic",
		"eventJoin" => "CalendarEventSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"leadSourceJoin" => "CampaignSearchRowBasic",
		"messagesJoin" => "MessageSearchRowBasic",
		"orderJoin" => "TransactionSearchRowBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
		"partnerJoin" => "PartnerSearchRowBasic",
		"salesRepJoin" => "EmployeeSearchRowBasic",
		"taskJoin" => "TaskSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

