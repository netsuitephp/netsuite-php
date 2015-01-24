<?php namespace Fungku\NetSuite\Classes;

class VendorCategorySearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "VendorCategorySearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

