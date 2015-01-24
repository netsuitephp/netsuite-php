<?php namespace Fungku\NetSuite\Classes;

class PartnerSearchRow extends SearchRow {
	public $basic;
	public $campaignResponseJoin;
	public $contactJoin;
	public $contactPrimaryJoin;
	public $customerJoin;
	public $fileJoin;
	public $messagesJoin;
	public $messagesFromJoin;
	public $messagesToJoin;
	public $opportunityJoin;
	public $transactionJoin;
	public $userJoin;
	public $userNotesJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "PartnerSearchRowBasic",
		"campaignResponseJoin" => "CampaignSearchRowBasic",
		"contactJoin" => "ContactSearchRowBasic",
		"contactPrimaryJoin" => "ContactSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"messagesJoin" => "MessageSearchRowBasic",
		"messagesFromJoin" => "MessageSearchRowBasic",
		"messagesToJoin" => "MessageSearchRowBasic",
		"opportunityJoin" => "OpportunitySearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

