<?php

class CustomerSearch extends SearchRecord {
	public $basic;
	public $billingScheduleJoin;
	public $callJoin;
	public $campaignResponseJoin;
	public $caseJoin;
	public $contactJoin;
	public $contactPrimaryJoin;
	public $eventJoin;
	public $fileJoin;
	public $hostedPageJoin;
	public $jobJoin;
	public $leadSourceJoin;
	public $messagesJoin;
	public $messagesFromJoin;
	public $messagesToJoin;
	public $opportunityJoin;
	public $originatingLeadJoin;
	public $parentCustomerJoin;
	public $partnerJoin;
	public $pricingJoin;
	public $purchasedItemJoin;
	public $resourceAllocationJoin;
	public $salesRepJoin;
	public $subCustomerJoin;
	public $taskJoin;
	public $timeJoin;
	public $topLevelParentJoin;
	public $transactionJoin;
	public $upsellItemJoin;
	public $userJoin;
	public $userNotesJoin;
	public $webSiteCategoryJoin;
	public $webSiteItemJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "CustomerSearchBasic",
		"billingScheduleJoin" => "BillingScheduleSearchBasic",
		"callJoin" => "PhoneCallSearchBasic",
		"campaignResponseJoin" => "CampaignSearchBasic",
		"caseJoin" => "SupportCaseSearchBasic",
		"contactJoin" => "ContactSearchBasic",
		"contactPrimaryJoin" => "ContactSearchBasic",
		"eventJoin" => "CalendarEventSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"hostedPageJoin" => "FileSearchBasic",
		"jobJoin" => "JobSearchBasic",
		"leadSourceJoin" => "CampaignSearchBasic",
		"messagesJoin" => "MessageSearchBasic",
		"messagesFromJoin" => "MessageSearchBasic",
		"messagesToJoin" => "MessageSearchBasic",
		"opportunityJoin" => "OpportunitySearchBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchBasic",
		"parentCustomerJoin" => "CustomerSearchBasic",
		"partnerJoin" => "PartnerSearchBasic",
		"pricingJoin" => "PricingSearchBasic",
		"purchasedItemJoin" => "ItemSearchBasic",
		"resourceAllocationJoin" => "ResourceAllocationSearchBasic",
		"salesRepJoin" => "EmployeeSearchBasic",
		"subCustomerJoin" => "CustomerSearchBasic",
		"taskJoin" => "TaskSearchBasic",
		"timeJoin" => "TimeBillSearchBasic",
		"topLevelParentJoin" => "CustomerSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"upsellItemJoin" => "ItemSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"webSiteCategoryJoin" => "SiteCategorySearchBasic",
		"webSiteItemJoin" => "ItemSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

