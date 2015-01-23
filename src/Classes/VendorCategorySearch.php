<?php

class VendorCategorySearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "VendorCategorySearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

