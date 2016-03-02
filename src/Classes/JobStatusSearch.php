<?php

namespace Fungku\NetSuite\Classes;

class JobStatusSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "JobStatusSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

