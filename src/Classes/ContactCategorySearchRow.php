<?php

class ContactCategorySearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "ContactCategorySearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

