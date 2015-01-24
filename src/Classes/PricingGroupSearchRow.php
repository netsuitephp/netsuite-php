<?php namespace Fungku\NetSuite\Classes;

class PricingGroupSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "PricingGroupSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

