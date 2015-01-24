<?php namespace Fungku\NetSuite\Classes;

class SolutionSearchRowBasic extends SearchRowBasic {
	public $assigned;
	public $caseCount;
	public $createdDate;
	public $description;
	public $displayOnline;
	public $externalId;
	public $internalId;
	public $isInactive;
	public $lastModifiedDate;
	public $message;
	public $previewref;
	public $solutionCode;
	public $status;
	public $title;
	public $customFieldList;
	static $paramtypesmap = array(
		"assigned" => "SearchColumnSelectField[]",
		"caseCount" => "SearchColumnLongField[]",
		"createdDate" => "SearchColumnDateField[]",
		"description" => "SearchColumnStringField[]",
		"displayOnline" => "SearchColumnBooleanField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"message" => "SearchColumnStringField[]",
		"previewref" => "SearchColumnStringField[]",
		"solutionCode" => "SearchColumnStringField[]",
		"status" => "SearchColumnEnumSelectField[]",
		"title" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

