<?php

class PricingGroupSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "PricingGroupSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

