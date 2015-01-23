<?php

class TimeSheetSearchRowBasic extends SearchRowBasic {
	public $approvalStatus;
	public $employee;
	public $endDate;
	public $externalId;
	public $id;
	public $internalId;
	public $startDate;
	public $totalHours;
	public $customFieldList;
	static $paramtypesmap = array(
		"approvalStatus" => "SearchColumnSelectField[]",
		"employee" => "SearchColumnSelectField[]",
		"endDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnStringField[]",
		"id" => "SearchColumnLongField[]",
		"internalId" => "SearchColumnLongField[]",
		"startDate" => "SearchColumnDateField[]",
		"totalHours" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

