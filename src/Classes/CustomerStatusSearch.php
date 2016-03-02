<?php

namespace Fungku\NetSuite\Classes;

class CustomerStatusSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "CustomerStatusSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

