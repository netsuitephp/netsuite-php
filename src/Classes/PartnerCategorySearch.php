<?php

class PartnerCategorySearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "PartnerCategorySearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

