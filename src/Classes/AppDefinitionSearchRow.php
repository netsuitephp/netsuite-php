<?php namespace Fungku\NetSuite\Classes;

class AppDefinitionSearchRow extends SearchRow {
	public $basic;
	public $appPackageJoin;
	public $creatorJoin;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "AppDefinitionSearchRowBasic",
		"appPackageJoin" => "AppPackageSearchRowBasic",
		"creatorJoin" => "EmployeeSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

