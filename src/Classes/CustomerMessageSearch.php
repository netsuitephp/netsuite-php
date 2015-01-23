<?php

class CustomerMessageSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "CustomerMessageSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

