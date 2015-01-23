<?php

class ContactSearch extends SearchRecord {
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
		"basic" => "ContactSearchBasic",
		"callJoin" => "PhoneCallSearchBasic",
		"campaignResponseJoin" => "CampaignSearchBasic",
		"caseJoin" => "SupportCaseSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"customerPrimaryJoin" => "CustomerSearchBasic",
		"eventJoin" => "CalendarEventSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"jobJoin" => "JobSearchBasic",
		"jobPrimaryJoin" => "JobSearchBasic",
		"messagesJoin" => "MessageSearchBasic",
		"messagesFromJoin" => "MessageSearchBasic",
		"messagesToJoin" => "MessageSearchBasic",
		"opportunityJoin" => "OpportunitySearchBasic",
		"parentCustomerJoin" => "CustomerSearchBasic",
		"parentJobJoin" => "JobSearchBasic",
		"parentPartnerJoin" => "PartnerSearchBasic",
		"parentVendorJoin" => "VendorSearchBasic",
		"partnerJoin" => "PartnerSearchBasic",
		"partnerPrimaryJoin" => "PartnerSearchBasic",
		"purchasedItemJoin" => "ItemSearchBasic",
		"taskJoin" => "TaskSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"upsellItemJoin" => "ItemSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"vendorJoin" => "VendorSearchBasic",
		"vendorPrimaryJoin" => "VendorSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

