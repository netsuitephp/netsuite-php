<?php

namespace Fungku\NetSuite\Classes;

class FileSearch extends SearchRecord {
	public $basic;
	public $shopperJoin;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "FileSearchBasic",
		"shopperJoin" => "CustomerSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

