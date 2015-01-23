<?php

class ResourceAllocation extends Record {
	public $requestedby;
	public $approvalStatus;
	public $nextApprover;
	public $allocationResource;
	public $project;
	public $notes;
	public $startDate;
	public $endDate;
	public $allocationAmount;
	public $allocationUnit;
	public $numberHours;
	public $percentOfTime;
	public $allocationType;
	public $customForm;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"requestedby" => "RecordRef",
		"approvalStatus" => "ResourceAllocationApprovalStatus",
		"nextApprover" => "RecordRef",
		"allocationResource" => "RecordRef",
		"project" => "RecordRef",
		"notes" => "string",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"allocationAmount" => "float",
		"allocationUnit" => "ResourceAllocationAllocationUnit",
		"numberHours" => "float",
		"percentOfTime" => "float",
		"allocationType" => "RecordRef",
		"customForm" => "RecordRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

