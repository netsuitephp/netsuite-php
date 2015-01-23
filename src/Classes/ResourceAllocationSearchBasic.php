<?php

class ResourceAllocationSearchBasic extends SearchRecordBasic {
	public $allocationType;
	public $allocationUnit;
	public $approvalStatus;
	public $customer;
	public $endDate;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $nextApprover;
	public $notes;
	public $numberHours;
	public $percentOfTime;
	public $project;
	public $requestedBy;
	public $resource;
	public $startDate;
	public $customFieldList;
	static $paramtypesmap = array(
		"allocationType" => "SearchMultiSelectField",
		"allocationUnit" => "SearchEnumMultiSelectField",
		"approvalStatus" => "SearchEnumMultiSelectField",
		"customer" => "SearchMultiSelectField",
		"endDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"nextApprover" => "SearchMultiSelectField",
		"notes" => "SearchStringField",
		"numberHours" => "SearchDoubleField",
		"percentOfTime" => "SearchDoubleField",
		"project" => "SearchMultiSelectField",
		"requestedBy" => "SearchMultiSelectField",
		"resource" => "SearchMultiSelectField",
		"startDate" => "SearchDateField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

