<?php

namespace Fungku\NetSuite\Classes;

class ResourceAllocationSearchRow extends SearchRow {
	public $basic;
	public $customerJoin;
	public $employeeJoin;
	public $jobJoin;
	public $projectTaskJoin;
	public $requestedByJoin;
	public $resourceJoin;
	public $userJoin;
	public $vendorJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "ResourceAllocationSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"employeeJoin" => "EmployeeSearchRowBasic",
		"jobJoin" => "JobSearchRowBasic",
		"projectTaskJoin" => "ProjectTaskSearchRowBasic",
		"requestedByJoin" => "EntitySearchRowBasic",
		"resourceJoin" => "EntitySearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"vendorJoin" => "VendorSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

