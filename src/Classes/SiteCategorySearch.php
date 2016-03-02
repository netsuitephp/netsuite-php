<?php

namespace Fungku\NetSuite\Classes;

class SiteCategorySearch extends SearchRecord {
	public $basic;
	public $shopperJoin;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "SiteCategorySearchBasic",
		"shopperJoin" => "CustomerSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

