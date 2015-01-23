<?php

class TimeEntrySearch extends SearchRecord {
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
		"basic" => "TimeEntrySearchBasic",
		"callJoin" => "PhoneCallSearchBasic",
		"caseJoin" => "SupportCaseSearchBasic",
		"classJoin" => "ClassificationSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"departmentJoin" => "DepartmentSearchBasic",
		"employeeJoin" => "EmployeeSearchBasic",
		"eventJoin" => "CalendarEventSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"jobJoin" => "JobSearchBasic",
		"locationJoin" => "LocationSearchBasic",
		"projectTaskJoin" => "ProjectTaskSearchBasic",
		"projectTaskAssignmentJoin" => "ProjectTaskAssignmentSearchBasic",
		"resourceAllocationJoin" => "ResourceAllocationSearchBasic",
		"taskJoin" => "TaskSearchBasic",
		"timeSheetJoin" => "TimeSheetSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"vendorJoin" => "VendorSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

