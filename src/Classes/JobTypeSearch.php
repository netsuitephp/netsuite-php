<?php

class JobTypeSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "JobTypeSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

