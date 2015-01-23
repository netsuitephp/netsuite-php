<?php

class CampaignSearchRow extends SearchRow {
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
		"basic" => "CampaignSearchRowBasic",
		"campaignRecipientJoin" => "EntitySearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"messagesJoin" => "MessageSearchRowBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
		"promotionCodeJoin" => "PromotionCodeSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

