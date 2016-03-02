<?php

namespace Fungku\NetSuite\Classes;

class CustomerCategorySearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "CustomerCategorySearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

