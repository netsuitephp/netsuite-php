<?php

namespace Fungku\NetSuite\Classes;

class EmployeeSearch extends SearchRecord {
	public $basic;
	public $campaignResponseJoin;
	public $chargeJoin;
	public $departmentJoin;
	public $fileJoin;
	public $locationJoin;
	public $messagesJoin;
	public $messagesFromJoin;
	public $messagesToJoin;
	public $resourceAllocationJoin;
	public $subsidiaryJoin;
	public $timeJoin;
	public $transactionJoin;
	public $userJoin;
	public $userNotesJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "EmployeeSearchBasic",
		"campaignResponseJoin" => "CampaignSearchBasic",
		"chargeJoin" => "ChargeSearchBasic",
		"departmentJoin" => "DepartmentSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"locationJoin" => "LocationSearchBasic",
		"messagesJoin" => "MessageSearchBasic",
		"messagesFromJoin" => "MessageSearchBasic",
		"messagesToJoin" => "MessageSearchBasic",
		"resourceAllocationJoin" => "ResourceAllocationSearchBasic",
		"subsidiaryJoin" => "SubsidiarySearchBasic",
		"timeJoin" => "TimeBillSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

