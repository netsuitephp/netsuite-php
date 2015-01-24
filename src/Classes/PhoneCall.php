<?php namespace Fungku\NetSuite\Classes;

class PhoneCall extends Record {
	public $message;
	public $company;
	public $contact;
	public $supportCase;
	public $transaction;
	public $milestone;
	public $customForm;
	public $title;
	public $owner;
	public $assigned;
	public $sendEmail;
	public $startDate;
	public $endDate;
	public $timedEvent;
	public $completedDate;
	public $phone;
	public $status;
	public $priority;
	public $accessLevel;
	public $reminderType;
	public $reminderMinutes;
	public $createdDate;
	public $lastModifiedDate;
	public $contactList;
	public $timeItemList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"message" => "string",
		"company" => "RecordRef",
		"contact" => "RecordRef",
		"supportCase" => "RecordRef",
		"transaction" => "RecordRef",
		"milestone" => "RecordRef",
		"customForm" => "RecordRef",
		"title" => "string",
		"owner" => "RecordRef",
		"assigned" => "RecordRef",
		"sendEmail" => "boolean",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"timedEvent" => "boolean",
		"completedDate" => "dateTime",
		"phone" => "string",
		"status" => "PhoneCallStatus",
		"priority" => "PhoneCallPriority",
		"accessLevel" => "boolean",
		"reminderType" => "PhoneCallReminderType",
		"reminderMinutes" => "PhoneCallReminderMinutes",
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"contactList" => "PhoneCallContactList",
		"timeItemList" => "PhoneCallTimeItemList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

