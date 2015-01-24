<?php namespace Fungku\NetSuite\Classes;

class CampaignSearch extends SearchRecord {
	public $basic;
	public $campaignRecipientJoin;
	public $fileJoin;
	public $messagesJoin;
	public $originatingLeadJoin;
	public $promotionCodeJoin;
	public $transactionJoin;
	public $userJoin;
	public $userNotesJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "CampaignSearchBasic",
		"campaignRecipientJoin" => "EntitySearchBasic",
		"fileJoin" => "FileSearchBasic",
		"messagesJoin" => "MessageSearchBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchBasic",
		"promotionCodeJoin" => "PromotionCodeSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

