<?php

class TermSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "TermSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

