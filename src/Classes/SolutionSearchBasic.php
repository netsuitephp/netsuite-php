<?php

namespace Fungku\NetSuite\Classes;

class SolutionSearchBasic extends SearchRecordBasic {
	public $abstract;
	public $assigned;
	public $caseCount;
	public $code;
	public $createdDate;
	public $description;
	public $externalId;
	public $externalIdString;
	public $find;
	public $internalId;
	public $internalIdNumber;
	public $isInactive;
	public $isOnline;
	public $lastModifiedDate;
	public $number;
	public $status;
	public $title;
	public $topic;
	public $customFieldList;
	static $paramtypesmap = array(
		"abstract" => "SearchStringField",
		"assigned" => "SearchMultiSelectField",
		"caseCount" => "SearchLongField",
		"code" => "SearchStringField",
		"createdDate" => "SearchDateField",
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"find" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isOnline" => "SearchBooleanField",
		"lastModifiedDate" => "SearchDateField",
		"number" => "SearchLongField",
		"status" => "SearchEnumMultiSelectField",
		"title" => "SearchStringField",
		"topic" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

