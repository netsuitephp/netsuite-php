<?php

namespace Fungku\NetSuite\Classes;

class TimeSheet extends Record {
	public $customForm;
	public $employee;
	public $startDate;
	public $endDate;
	public $totalHours;
	public $approvalStatus;
	public $subsidiary;
	public $timeGridList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"employee" => "RecordRef",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"totalHours" => "Duration",
		"approvalStatus" => "RecordRef",
		"subsidiary" => "RecordRef",
		"timeGridList" => "TimeSheetTimeGridList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

