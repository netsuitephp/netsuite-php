<?php

class PartnerCategorySearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "PartnerCategorySearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

