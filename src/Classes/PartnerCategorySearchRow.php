<?php

namespace Fungku\NetSuite\Classes;

class PartnerCategorySearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "PartnerCategorySearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

