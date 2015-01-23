<?php

class CalendarEventSearchRowBasic extends SearchRowBasic {
	public $attendee;
	public $company;
	public $completedDate;
	public $contact;
	public $createdDate;
	public $endTime;
	public $externalId;
	public $instanceEnd;
	public $instanceStart;
	public $internalId;
	public $lastModifiedDate;
	public $location;
	public $markdone;
	public $message;
	public $organizer;
	public $owner;
	public $recurrence;
	public $resource;
	public $response;
	public $startDate;
	public $startTime;
	public $status;
	public $title;
	public $transaction;
	public $customFieldList;
	static $paramtypesmap = array(
		"attendee" => "SearchColumnSelectField[]",
		"company" => "SearchColumnSelectField[]",
		"completedDate" => "SearchColumnDateField[]",
		"contact" => "SearchColumnSelectField[]",
		"createdDate" => "SearchColumnDateField[]",
		"endTime" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"instanceEnd" => "SearchColumnDateField[]",
		"instanceStart" => "SearchColumnDateField[]",
		"internalId" => "SearchColumnSelectField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"location" => "SearchColumnStringField[]",
		"markdone" => "SearchColumnStringField[]",
		"message" => "SearchColumnStringField[]",
		"organizer" => "SearchColumnSelectField[]",
		"owner" => "SearchColumnSelectField[]",
		"recurrence" => "SearchColumnStringField[]",
		"resource" => "SearchColumnSelectField[]",
		"response" => "SearchColumnEnumSelectField[]",
		"startDate" => "SearchColumnStringField[]",
		"startTime" => "SearchColumnStringField[]",
		"status" => "SearchColumnEnumSelectField[]",
		"title" => "SearchColumnStringField[]",
		"transaction" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

