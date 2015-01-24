<?php namespace Fungku\NetSuite\Classes;

class AppPackageSearchRow extends SearchRow {
	public $basic;
	public $appDefinitionJoin;
	public $creatorJoin;
	public $packageFileJoin;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "AppPackageSearchRowBasic",
		"appDefinitionJoin" => "AppDefinitionSearchRowBasic",
		"creatorJoin" => "EmployeeSearchRowBasic",
		"packageFileJoin" => "FileSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

