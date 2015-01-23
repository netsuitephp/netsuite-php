<?php

class TimeSheetSearchBasic extends SearchRecordBasic {
	public $approvalStatus;
	public $employee;
	public $externalId;
	public $externalIdString;
	public $id;
	public $internalId;
	public $internalIdNumber;
	public $timeSheetDate;
	public $totalHours;
	public $customFieldList;
	static $paramtypesmap = array(
		"approvalStatus" => "SearchMultiSelectField",
		"employee" => "SearchMultiSelectField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"id" => "SearchLongField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"timeSheetDate" => "SearchDateField",
		"totalHours" => "SearchDoubleField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

