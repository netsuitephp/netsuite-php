<?php namespace Fungku\NetSuite\Classes;

class ContactCategorySearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "ContactCategorySearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

