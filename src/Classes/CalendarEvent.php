<?php

class CalendarEvent extends Record {
	public $company;
	public $contact;
	public $supportCase;
	public $transaction;
	public $period;
	public $frequency;
	public $recurrenceDowMaskList;
	public $recurrenceDow;
	public $recurrenceDowim;
	public $seriesStartDate;
	public $endByDate;
	public $noEndDate;
	public $sendEmail;
	public $customForm;
	public $title;
	public $recurrence;
	public $location;
	public $startDate;
	public $allDayEvent;
	public $timedEvent;
	public $reminderType;
	public $reminderMinutes;
	public $status;
	public $accessLevel;
	public $organizer;
	public $message;
	public $createdDate;
	public $endDate;
	public $exclusionDateList;
	public $lastModifiedDate;
	public $owner;
	public $attendeeList;
	public $resourceList;
	public $timeItemList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"company" => "RecordRef",
		"contact" => "RecordRef",
		"supportCase" => "RecordRef",
		"transaction" => "RecordRef",
		"period" => "integer",
		"frequency" => "RecurrenceFrequency",
		"recurrenceDowMaskList" => "RecurrenceDowMaskList",
		"recurrenceDow" => "RecurrenceDow",
		"recurrenceDowim" => "RecurrenceDowim",
		"seriesStartDate" => "dateTime",
		"endByDate" => "dateTime",
		"noEndDate" => "boolean",
		"sendEmail" => "boolean",
		"customForm" => "RecordRef",
		"title" => "string",
		"recurrence" => "string",
		"location" => "string",
		"startDate" => "dateTime",
		"allDayEvent" => "boolean",
		"timedEvent" => "boolean",
		"reminderType" => "CalendarEventReminderType",
		"reminderMinutes" => "CalendarEventReminderMinutes",
		"status" => "CalendarEventStatus",
		"accessLevel" => "CalendarEventAccessLevel",
		"organizer" => "RecordRef",
		"message" => "string",
		"createdDate" => "dateTime",
		"endDate" => "dateTime",
		"exclusionDateList" => "ExclusionDateList",
		"lastModifiedDate" => "dateTime",
		"owner" => "RecordRef",
		"attendeeList" => "CalendarEventAttendeeList",
		"resourceList" => "CalendarEventResourceList",
		"timeItemList" => "CalendarEventTimeItemList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

