<?php

class TaskSearchRowBasic extends SearchRowBasic {
	public $accessLevel;
	public $actualTime;
	public $assigned;
	public $company;
	public $completedDate;
	public $contact;
	public $createdDate;
	public $dueDate;
	public $estimatedTime;
	public $estimatedTimeOverride;
	public $externalId;
	public $internalId;
	public $isJobSummaryTask;
	public $isJobTask;
	public $lastModifiedDate;
	public $markdone;
	public $message;
	public $milestone;
	public $order;
	public $owner;
	public $percentComplete;
	public $percentTimeComplete;
	public $priority;
	public $startDate;
	public $startTime;
	public $status;
	public $timeRemaining;
	public $title;
	public $transaction;
	public $customFieldList;
	static $paramtypesmap = array(
		"accessLevel" => "SearchColumnStringField[]",
		"actualTime" => "SearchColumnDoubleField[]",
		"assigned" => "SearchColumnSelectField[]",
		"company" => "SearchColumnSelectField[]",
		"completedDate" => "SearchColumnDateField[]",
		"contact" => "SearchColumnSelectField[]",
		"createdDate" => "SearchColumnDateField[]",
		"dueDate" => "SearchColumnDateField[]",
		"estimatedTime" => "SearchColumnDoubleField[]",
		"estimatedTimeOverride" => "SearchColumnDoubleField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isJobSummaryTask" => "SearchColumnBooleanField[]",
		"isJobTask" => "SearchColumnBooleanField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"markdone" => "SearchColumnStringField[]",
		"message" => "SearchColumnStringField[]",
		"milestone" => "SearchColumnSelectField[]",
		"order" => "SearchColumnLongField[]",
		"owner" => "SearchColumnSelectField[]",
		"percentComplete" => "SearchColumnDoubleField[]",
		"percentTimeComplete" => "SearchColumnDoubleField[]",
		"priority" => "SearchColumnEnumSelectField[]",
		"startDate" => "SearchColumnDateField[]",
		"startTime" => "SearchColumnStringField[]",
		"status" => "SearchColumnEnumSelectField[]",
		"timeRemaining" => "SearchColumnDoubleField[]",
		"title" => "SearchColumnStringField[]",
		"transaction" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

