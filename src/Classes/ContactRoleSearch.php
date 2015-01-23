<?php

class ContactRoleSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "ContactRoleSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

