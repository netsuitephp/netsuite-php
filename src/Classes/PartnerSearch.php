<?php

namespace Fungku\NetSuite\Classes;

class PartnerSearch extends SearchRecord {
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
		"basic" => "PartnerSearchBasic",
		"campaignResponseJoin" => "CampaignSearchBasic",
		"contactJoin" => "ContactSearchBasic",
		"contactPrimaryJoin" => "ContactSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"messagesJoin" => "MessageSearchBasic",
		"messagesFromJoin" => "MessageSearchBasic",
		"messagesToJoin" => "MessageSearchBasic",
		"opportunityJoin" => "OpportunitySearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

