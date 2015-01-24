<?php namespace Fungku\NetSuite\Classes;

class AccountSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "AccountSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

