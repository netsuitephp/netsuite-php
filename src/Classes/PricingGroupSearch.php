<?php

class PricingGroupSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "PricingGroupSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

