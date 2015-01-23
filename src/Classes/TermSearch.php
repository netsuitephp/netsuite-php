<?php

class TermSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "TermSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

