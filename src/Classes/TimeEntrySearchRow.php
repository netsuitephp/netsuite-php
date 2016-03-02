<?php

namespace Fungku\NetSuite\Classes;

class TimeEntrySearchRow extends SearchRow {
	public $basic;
	public $callJoin;
	public $caseJoin;
	public $classJoin;
	public $customerJoin;
	public $departmentJoin;
	public $employeeJoin;
	public $eventJoin;
	public $itemJoin;
	public $jobJoin;
	public $locationJoin;
	public $projectTaskJoin;
	public $projectTaskAssignmentJoin;
	public $resourceAllocationJoin;
	public $taskJoin;
	public $timeSheetJoin;
	public $userJoin;
	public $vendorJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "TimeEntrySearchRowBasic",
		"callJoin" => "PhoneCallSearchRowBasic",
		"caseJoin" => "SupportCaseSearchRowBasic",
		"classJoin" => "ClassificationSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"departmentJoin" => "DepartmentSearchRowBasic",
		"employeeJoin" => "EmployeeSearchRowBasic",
		"eventJoin" => "CalendarEventSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"jobJoin" => "JobSearchRowBasic",
		"locationJoin" => "LocationSearchRowBasic",
		"projectTaskJoin" => "ProjectTaskSearchRowBasic",
		"projectTaskAssignmentJoin" => "ProjectTaskAssignmentSearchRowBasic",
		"resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
		"taskJoin" => "TaskSearchRowBasic",
		"timeSheetJoin" => "TimeSheetSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"vendorJoin" => "VendorSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

