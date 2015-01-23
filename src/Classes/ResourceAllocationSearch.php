<?php

class ResourceAllocationSearch extends SearchRecord {
	public $basic;
	public $customerJoin;
	public $employeeJoin;
	public $jobJoin;
	public $requestedByJoin;
	public $resourceJoin;
	public $userJoin;
	public $vendorJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "ResourceAllocationSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"employeeJoin" => "EmployeeSearchBasic",
		"jobJoin" => "JobSearchBasic",
		"requestedByJoin" => "EntitySearchBasic",
		"resourceJoin" => "EntitySearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"vendorJoin" => "VendorSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

