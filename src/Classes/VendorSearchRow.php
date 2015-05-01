<?php namespace Fungku\NetSuite\Classes;

class VendorSearchRow extends SearchRow {
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
		"basic" => "VendorSearchRowBasic",
		"accountJoin" => "AccountSearchRowBasic",
		"campaignResponseJoin" => "CampaignSearchRowBasic",
		"contactJoin" => "ContactSearchRowBasic",
		"contactPrimaryJoin" => "ContactSearchRowBasic",
		"expAccountJoin" => "AccountSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"messagesJoin" => "MessageSearchRowBasic",
		"messagesFromJoin" => "MessageSearchRowBasic",
		"messagesToJoin" => "MessageSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

