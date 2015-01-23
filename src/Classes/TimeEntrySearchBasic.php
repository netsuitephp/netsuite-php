<?php

class TimeEntrySearchBasic extends SearchRecordBasic {
	public $approvalStatus;
	public $billable;
	public $billingClass;
	public $billingStatus;
	public $class;
	public $customer;
	public $date;
	public $dateCreated;
	public $department;
	public $duration;
	public $employee;
	public $exempt;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $isCharged;
	public $item;
	public $lastModified;
	public $location;
	public $memo;
	public $nextApprover;
	public $paidByPayroll;
	public $paidExternally;
	public $payItem;
	public $productive;
	public $subsidiary;
	public $type;
	public $utilized;
	public $customFieldList;
	static $paramtypesmap = array(
		"approvalStatus" => "SearchMultiSelectField",
		"billable" => "SearchBooleanField",
		"billingClass" => "SearchMultiSelectField",
		"billingStatus" => "SearchBooleanField",
		"class" => "SearchMultiSelectField",
		"customer" => "SearchMultiSelectField",
		"date" => "SearchDateField",
		"dateCreated" => "SearchDateField",
		"department" => "SearchMultiSelectField",
		"duration" => "SearchDoubleField",
		"employee" => "SearchMultiSelectField",
		"exempt" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isCharged" => "SearchBooleanField",
		"item" => "SearchMultiSelectField",
		"lastModified" => "SearchDateField",
		"location" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"nextApprover" => "SearchMultiSelectField",
		"paidByPayroll" => "SearchBooleanField",
		"paidExternally" => "SearchBooleanField",
		"payItem" => "SearchMultiSelectField",
		"productive" => "SearchBooleanField",
		"subsidiary" => "SearchMultiSelectField",
		"type" => "SearchEnumMultiSelectField",
		"utilized" => "SearchBooleanField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

