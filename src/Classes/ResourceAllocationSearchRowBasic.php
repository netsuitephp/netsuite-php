<?php namespace Fungku\NetSuite\Classes;

class ResourceAllocationSearchRowBasic extends SearchRowBasic {
	public $allocationType;
	public $allocationUnit;
	public $approvalStatus;
	public $project;
	public $customer;
	public $endDate;
	public $externalId;
	public $internalId;
	public $nextApprover;
	public $notes;
	public $numberHours;
	public $percentOfTime;
	public $requestedBy;
	public $resource;
	public $startDate;
	public $customFieldList;
	static $paramtypesmap = array(
		"allocationType" => "SearchColumnSelectField[]",
		"allocationUnit" => "SearchColumnEnumSelectField[]",
		"approvalStatus" => "SearchColumnEnumSelectField[]",
		"project" => "SearchColumnSelectField[]",
		"customer" => "SearchColumnSelectField[]",
		"endDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"nextApprover" => "SearchColumnSelectField[]",
		"notes" => "SearchColumnStringField[]",
		"numberHours" => "SearchColumnDoubleField[]",
		"percentOfTime" => "SearchColumnDoubleField[]",
		"requestedBy" => "SearchColumnSelectField[]",
		"resource" => "SearchColumnSelectField[]",
		"startDate" => "SearchColumnDateField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

