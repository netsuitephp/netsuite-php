<?php namespace Fungku\NetSuite\Classes;

class ContactSearchRow extends SearchRow {
	public $basic;
	public $callJoin;
	public $campaignResponseJoin;
	public $caseJoin;
	public $customerJoin;
	public $customerPrimaryJoin;
	public $eventJoin;
	public $fileJoin;
	public $jobJoin;
	public $jobPrimaryJoin;
	public $messagesJoin;
	public $messagesFromJoin;
	public $messagesToJoin;
	public $opportunityJoin;
	public $parentCustomerJoin;
	public $parentJobJoin;
	public $parentPartnerJoin;
	public $parentVendorJoin;
	public $partnerJoin;
	public $partnerPrimaryJoin;
	public $purchasedItemJoin;
	public $taskJoin;
	public $transactionJoin;
	public $upsellItemJoin;
	public $userJoin;
	public $userNotesJoin;
	public $vendorJoin;
	public $vendorPrimaryJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "ContactSearchRowBasic",
		"callJoin" => "PhoneCallSearchRowBasic",
		"campaignResponseJoin" => "CampaignSearchRowBasic",
		"caseJoin" => "SupportCaseSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"customerPrimaryJoin" => "CustomerSearchRowBasic",
		"eventJoin" => "CalendarEventSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"jobJoin" => "JobSearchRowBasic",
		"jobPrimaryJoin" => "JobSearchRowBasic",
		"messagesJoin" => "MessageSearchRowBasic",
		"messagesFromJoin" => "MessageSearchRowBasic",
		"messagesToJoin" => "MessageSearchRowBasic",
		"opportunityJoin" => "OpportunitySearchRowBasic",
		"parentCustomerJoin" => "CustomerSearchRowBasic",
		"parentJobJoin" => "JobSearchRowBasic",
		"parentPartnerJoin" => "PartnerSearchRowBasic",
		"parentVendorJoin" => "VendorSearchRowBasic",
		"partnerJoin" => "PartnerSearchRowBasic",
		"partnerPrimaryJoin" => "PartnerSearchRowBasic",
		"purchasedItemJoin" => "ItemSearchRowBasic",
		"taskJoin" => "TaskSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"upsellItemJoin" => "ItemSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"vendorJoin" => "VendorSearchRowBasic",
		"vendorPrimaryJoin" => "VendorSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

