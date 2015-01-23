<?php

class SalesRoleSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "SalesRoleSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

