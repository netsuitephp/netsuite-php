<?php

class VendorCategorySearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "VendorCategorySearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

