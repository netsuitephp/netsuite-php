<?php

namespace Fungku\NetSuite\Classes;

class RevRecTemplateSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "RevRecTemplateSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

