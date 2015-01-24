<?php namespace Fungku\NetSuite\Classes;

class MessageSearchRow extends SearchRow {
	public $basic;
	public $attachmentsJoin;
	public $authorJoin;
	public $campaignJoin;
	public $caseJoin;
	public $contactJoin;
	public $customerJoin;
	public $employeeJoin;
	public $entityJoin;
	public $opportunityJoin;
	public $originatingLeadJoin;
	public $partnerJoin;
	public $recipientJoin;
	public $transactionJoin;
	public $userJoin;
	public $vendorJoin;
	static $paramtypesmap = array(
		"basic" => "MessageSearchRowBasic",
		"attachmentsJoin" => "FileSearchRowBasic",
		"authorJoin" => "EntitySearchRowBasic",
		"campaignJoin" => "CampaignSearchRowBasic",
		"caseJoin" => "SupportCaseSearchRowBasic",
		"contactJoin" => "ContactSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"employeeJoin" => "EmployeeSearchRowBasic",
		"entityJoin" => "EntitySearchRowBasic",
		"opportunityJoin" => "OpportunitySearchRowBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
		"partnerJoin" => "PartnerSearchRowBasic",
		"recipientJoin" => "EntitySearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"vendorJoin" => "VendorSearchRowBasic",
	);
}

