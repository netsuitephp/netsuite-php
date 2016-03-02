<?php

namespace Fungku\NetSuite\Classes;

class JobSearch extends SearchRecord {
	public $basic;
	public $billingScheduleJoin;
	public $contactPrimaryJoin;
	public $customerJoin;
	public $projectTaskJoin;
	public $resourceAllocationJoin;
	public $taskJoin;
	public $timeJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "JobSearchBasic",
		"billingScheduleJoin" => "BillingScheduleSearchBasic",
		"contactPrimaryJoin" => "ContactSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"projectTaskJoin" => "ProjectTaskSearchBasic",
		"resourceAllocationJoin" => "ResourceAllocationSearchBasic",
		"taskJoin" => "TaskSearchBasic",
		"timeJoin" => "TimeBillSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

