<?php

class Task extends Record {
	public $company;
	public $contact;
	public $supportCase;
	public $transaction;
	public $milestone;
	public $customForm;
	public $title;
	public $assigned;
	public $sendEmail;
	public $timedEvent;
	public $estimatedTime;
	public $estimatedTimeOverride;
	public $actualTime;
	public $timeRemaining;
	public $percentTimeComplete;
	public $percentComplete;
	public $parent;
	public $startDate;
	public $endDate;
	public $dueDate;
	public $completedDate;
	public $priority;
	public $status;
	public $message;
	public $accessLevel;
	public $reminderType;
	public $reminderMinutes;
	public $createdDate;
	public $lastModifiedDate;
	public $owner;
	public $contactList;
	public $timeItemList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"company" => "RecordRef",
		"contact" => "RecordRef",
		"supportCase" => "RecordRef",
		"transaction" => "RecordRef",
		"milestone" => "RecordRef",
		"customForm" => "RecordRef",
		"title" => "string",
		"assigned" => "RecordRef",
		"sendEmail" => "boolean",
		"timedEvent" => "boolean",
		"estimatedTime" => "Duration",
		"estimatedTimeOverride" => "Duration",
		"actualTime" => "Duration",
		"timeRemaining" => "Duration",
		"percentTimeComplete" => "float",
		"percentComplete" => "float",
		"parent" => "RecordRef",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"dueDate" => "dateTime",
		"completedDate" => "dateTime",
		"priority" => "TaskPriority",
		"status" => "TaskStatus",
		"message" => "string",
		"accessLevel" => "boolean",
		"reminderType" => "TaskReminderType",
		"reminderMinutes" => "TaskReminderMinutes",
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"owner" => "RecordRef",
		"contactList" => "TaskContactList",
		"timeItemList" => "TaskTimeItemList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

