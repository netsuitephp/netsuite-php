<?php

namespace Fungku\NetSuite\Classes;

class ExpenseCategorySearch extends SearchRecord {
	public $basic;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "ExpenseCategorySearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

