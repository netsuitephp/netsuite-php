<?php

class CustomerMessageSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "CustomerMessageSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

