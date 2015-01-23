<?php

class NoteSearch extends SearchRecord {
	public $basic;
	public $authorJoin;
	public $callJoin;
	public $campaignJoin;
	public $caseJoin;
	public $contactJoin;
	public $customerJoin;
	public $employeeJoin;
	public $entityJoin;
	public $eventJoin;
	public $issueJoin;
	public $itemJoin;
	public $opportunityJoin;
	public $originatingLeadJoin;
	public $partnerJoin;
	public $solutionJoin;
	public $taskJoin;
	public $transactionJoin;
	public $userJoin;
	public $vendorJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "NoteSearchBasic",
		"authorJoin" => "EmployeeSearchBasic",
		"callJoin" => "PhoneCallSearchBasic",
		"campaignJoin" => "CampaignSearchBasic",
		"caseJoin" => "SupportCaseSearchBasic",
		"contactJoin" => "ContactSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"employeeJoin" => "EmployeeSearchBasic",
		"entityJoin" => "EntitySearchBasic",
		"eventJoin" => "CalendarEventSearchBasic",
		"issueJoin" => "IssueSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"opportunityJoin" => "OpportunitySearchBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchBasic",
		"partnerJoin" => "PartnerSearchBasic",
		"solutionJoin" => "SolutionSearchBasic",
		"taskJoin" => "TaskSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"vendorJoin" => "VendorSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

