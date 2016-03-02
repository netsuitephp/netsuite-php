<?php

namespace Fungku\NetSuite\Classes;

class SalesRoleSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "SalesRoleSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

