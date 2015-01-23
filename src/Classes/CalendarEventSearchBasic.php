<?php

class CalendarEventSearchBasic extends SearchRecordBasic {
	public $attendee;
	public $calendar;
	public $completedDate;
	public $createdDate;
	public $externalId;
	public $externalIdString;
	public $instanceStart;
	public $internalId;
	public $internalIdNumber;
	public $isUpcomingEvent;
	public $lastModifiedDate;
	public $location;
	public $message;
	public $organizer;
	public $owner;
	public $resource;
	public $response;
	public $startDate;
	public $status;
	public $title;
	public $customFieldList;
	static $paramtypesmap = array(
		"attendee" => "SearchMultiSelectField",
		"calendar" => "SearchMultiSelectField",
		"completedDate" => "SearchDateField",
		"createdDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"instanceStart" => "SearchDateField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isUpcomingEvent" => "SearchBooleanField",
		"lastModifiedDate" => "SearchDateField",
		"location" => "SearchStringField",
		"message" => "SearchStringField",
		"organizer" => "SearchMultiSelectField",
		"owner" => "SearchMultiSelectField",
		"resource" => "SearchMultiSelectField",
		"response" => "SearchEnumMultiSelectField",
		"startDate" => "SearchDateField",
		"status" => "SearchEnumMultiSelectField",
		"title" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

