<?php

class RevRecTemplateSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "RevRecTemplateSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

