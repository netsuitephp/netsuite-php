<?php namespace Fungku\NetSuite\Classes;

class MessageSearch extends SearchRecord {
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
		"basic" => "MessageSearchBasic",
		"attachmentsJoin" => "FileSearchBasic",
		"authorJoin" => "EntitySearchBasic",
		"campaignJoin" => "CampaignSearchBasic",
		"caseJoin" => "SupportCaseSearchBasic",
		"contactJoin" => "ContactSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"employeeJoin" => "EmployeeSearchBasic",
		"entityJoin" => "EntitySearchBasic",
		"opportunityJoin" => "OpportunitySearchBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchBasic",
		"partnerJoin" => "PartnerSearchBasic",
		"recipientJoin" => "EntitySearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"vendorJoin" => "VendorSearchBasic",
	);
}

