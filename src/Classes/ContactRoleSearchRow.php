<?php namespace Fungku\NetSuite\Classes;

class ContactRoleSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "ContactRoleSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

