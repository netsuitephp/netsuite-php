<?php

namespace Fungku\NetSuite\Classes;

class JobSearchRow extends SearchRow {
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
		"basic" => "JobSearchRowBasic",
		"billingScheduleJoin" => "BillingScheduleSearchRowBasic",
		"contactPrimaryJoin" => "ContactSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"projectTaskJoin" => "ProjectTaskSearchRowBasic",
		"resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
		"taskJoin" => "TaskSearchRowBasic",
		"timeJoin" => "TimeBillSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

