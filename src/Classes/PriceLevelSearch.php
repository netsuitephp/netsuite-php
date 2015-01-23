<?php

class PriceLevelSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "PriceLevelSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

