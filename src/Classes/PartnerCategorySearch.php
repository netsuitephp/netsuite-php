<?php namespace Fungku\NetSuite\Classes;

class PartnerCategorySearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "PartnerCategorySearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

