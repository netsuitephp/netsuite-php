<?php

namespace Fungku\NetSuite\Classes;

class PhoneCallSearchBasic extends SearchRecordBasic {
	public $assigned;
	public $company;
	public $completedDate;
	public $contact;
	public $createdBy;
	public $createdDate;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $isPrivate;
	public $lastModifiedDate;
	public $owner;
	public $phone;
	public $priority;
	public $startDate;
	public $status;
	public $title;
	public $customFieldList;
	static $paramtypesmap = array(
		"assigned" => "SearchMultiSelectField",
		"company" => "SearchMultiSelectField",
		"completedDate" => "SearchDateField",
		"contact" => "SearchMultiSelectField",
		"createdBy" => "SearchMultiSelectField",
		"createdDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isPrivate" => "SearchBooleanField",
		"lastModifiedDate" => "SearchDateField",
		"owner" => "SearchBooleanField",
		"phone" => "SearchStringField",
		"priority" => "SearchEnumMultiSelectField",
		"startDate" => "SearchDateField",
		"status" => "SearchEnumMultiSelectField",
		"title" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

