<?php

namespace Fungku\NetSuite\Classes;

class OtherNameCategorySearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "OtherNameCategorySearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

