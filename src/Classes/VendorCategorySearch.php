<?php

namespace Fungku\NetSuite\Classes;

class VendorCategorySearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "VendorCategorySearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

