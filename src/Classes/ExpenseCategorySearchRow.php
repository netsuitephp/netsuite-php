<?php namespace Fungku\NetSuite\Classes;

class ExpenseCategorySearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "ExpenseCategorySearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

