<?php namespace Fungku\NetSuite\Classes;

class VendorSearch extends SearchRecord {
	public $basic;
	public $accountJoin;
	public $campaignResponseJoin;
	public $contactJoin;
	public $contactPrimaryJoin;
	public $expAccountJoin;
	public $fileJoin;
	public $messagesJoin;
	public $messagesFromJoin;
	public $messagesToJoin;
	public $transactionJoin;
	public $userJoin;
	public $userNotesJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "VendorSearchBasic",
		"accountJoin" => "AccountSearchBasic",
		"campaignResponseJoin" => "CampaignSearchBasic",
		"contactJoin" => "ContactSearchBasic",
		"contactPrimaryJoin" => "ContactSearchBasic",
		"expAccountJoin" => "AccountSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"messagesJoin" => "MessageSearchBasic",
		"messagesFromJoin" => "MessageSearchBasic",
		"messagesToJoin" => "MessageSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

