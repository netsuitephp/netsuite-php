<?php

class OtherNameCategorySearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "OtherNameCategorySearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

