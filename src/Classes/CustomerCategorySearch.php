<?php namespace Fungku\NetSuite\Classes;

class CustomerCategorySearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "CustomerCategorySearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

