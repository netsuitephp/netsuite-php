<?php

class CustomListSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "CustomListSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

