<?php

class CustomListSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "CustomListSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

