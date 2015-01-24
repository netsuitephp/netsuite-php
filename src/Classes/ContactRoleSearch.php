<?php namespace Fungku\NetSuite\Classes;

class ContactRoleSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "ContactRoleSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

