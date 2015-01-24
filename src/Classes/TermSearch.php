<?php namespace Fungku\NetSuite\Classes;

class TermSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "TermSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

