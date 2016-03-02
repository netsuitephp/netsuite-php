<?php

namespace Fungku\NetSuite\Classes;

class FileSearchRow extends SearchRow {
	public $basic;
	public $shopperJoin;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "FileSearchRowBasic",
		"shopperJoin" => "CustomerSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

