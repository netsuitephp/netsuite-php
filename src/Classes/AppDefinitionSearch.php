<?php

class AppDefinitionSearch extends SearchRecord {
	public $basic;
	public $appPackageJoin;
	public $creatorJoin;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "AppDefinitionSearchBasic",
		"appPackageJoin" => "AppPackageSearchBasic",
		"creatorJoin" => "EmployeeSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

