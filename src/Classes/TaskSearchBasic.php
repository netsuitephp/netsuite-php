<?php

namespace Fungku\NetSuite\Classes;

class TaskSearchBasic extends SearchRecordBasic {
	public $actualTime;
	public $assigned;
	public $company;
	public $completedDate;
	public $contact;
	public $createdDate;
	public $endDate;
	public $estimatedTime;
	public $estimatedTimeOverride;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $isJobSummaryTask;
	public $isJobTask;
	public $isPrivate;
	public $lastModifiedDate;
	public $milestone;
	public $owner;
	public $percentComplete;
	public $percentTimeComplete;
	public $priority;
	public $startDate;
	public $status;
	public $timeRemaining;
	public $title;
	public $customFieldList;
	static $paramtypesmap = array(
		"actualTime" => "SearchDoubleField",
		"assigned" => "SearchMultiSelectField",
		"company" => "SearchMultiSelectField",
		"completedDate" => "SearchDateField",
		"contact" => "SearchMultiSelectField",
		"createdDate" => "SearchDateField",
		"endDate" => "SearchDateField",
		"estimatedTime" => "SearchDoubleField",
		"estimatedTimeOverride" => "SearchDoubleField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isJobSummaryTask" => "SearchBooleanField",
		"isJobTask" => "SearchBooleanField",
		"isPrivate" => "SearchBooleanField",
		"lastModifiedDate" => "SearchDateField",
		"milestone" => "SearchLongField",
		"owner" => "SearchMultiSelectField",
		"percentComplete" => "SearchLongField",
		"percentTimeComplete" => "SearchLongField",
		"priority" => "SearchEnumMultiSelectField",
		"startDate" => "SearchDateField",
		"status" => "SearchEnumMultiSelectField",
		"timeRemaining" => "SearchDoubleField",
		"title" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

