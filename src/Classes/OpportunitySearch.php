<?php

namespace Fungku\NetSuite\Classes;

class OpportunitySearch extends SearchRecord {
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
		"basic" => "OpportunitySearchBasic",
		"actualJoin" => "TransactionSearchBasic",
		"callJoin" => "PhoneCallSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"decisionMakerJoin" => "ContactSearchBasic",
		"estimateJoin" => "TransactionSearchBasic",
		"eventJoin" => "CalendarEventSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"leadSourceJoin" => "CampaignSearchBasic",
		"messagesJoin" => "MessageSearchBasic",
		"orderJoin" => "TransactionSearchBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchBasic",
		"partnerJoin" => "PartnerSearchBasic",
		"salesRepJoin" => "EmployeeSearchBasic",
		"taskJoin" => "TaskSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

