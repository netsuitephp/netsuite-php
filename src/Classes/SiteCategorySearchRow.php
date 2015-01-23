<?php

class SiteCategorySearchRow extends SearchRow {
	public $basic;
	public $shopperJoin;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "SiteCategorySearchRowBasic",
		"shopperJoin" => "CustomerSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

