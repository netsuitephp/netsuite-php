<?php namespace Fungku\NetSuite\Classes;

class NoteSearchRow extends SearchRow {
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
		"basic" => "NoteSearchRowBasic",
		"authorJoin" => "EmployeeSearchRowBasic",
		"callJoin" => "PhoneCallSearchRowBasic",
		"campaignJoin" => "CampaignSearchRowBasic",
		"caseJoin" => "SupportCaseSearchRowBasic",
		"contactJoin" => "ContactSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"employeeJoin" => "EmployeeSearchRowBasic",
		"entityJoin" => "EntitySearchRowBasic",
		"eventJoin" => "CalendarEventSearchRowBasic",
		"issueJoin" => "IssueSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"opportunityJoin" => "OpportunitySearchRowBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
		"partnerJoin" => "PartnerSearchRowBasic",
		"solutionJoin" => "SolutionSearchRowBasic",
		"taskJoin" => "TaskSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"vendorJoin" => "VendorSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

