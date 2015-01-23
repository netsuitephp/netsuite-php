<?php

class SalesRoleSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "SalesRoleSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

