<?php

class TimeBillSearchBasic extends SearchRecordBasic {
	public $approved;
	public $billable;
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
	public $item;
	public $lastModified;
	public $location;
	public $memo;
	public $paidByPayroll;
	public $paidExternally;
	public $payItem;
	public $productive;
	public $status;
	public $subsidiary;
	public $temporaryLocalJurisdiction;
	public $temporaryStateJurisdiction;
	public $type;
	public $utilized;
	public $customFieldList;
	static $paramtypesmap = array(
		"approved" => "SearchBooleanField",
		"billable" => "SearchBooleanField",
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
		"item" => "SearchMultiSelectField",
		"lastModified" => "SearchDateField",
		"location" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"paidByPayroll" => "SearchBooleanField",
		"paidExternally" => "SearchBooleanField",
		"payItem" => "SearchMultiSelectField",
		"productive" => "SearchBooleanField",
		"status" => "SearchBooleanField",
		"subsidiary" => "SearchMultiSelectField",
		"temporaryLocalJurisdiction" => "SearchMultiSelectField",
		"temporaryStateJurisdiction" => "SearchMultiSelectField",
		"type" => "SearchEnumMultiSelectField",
		"utilized" => "SearchBooleanField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

