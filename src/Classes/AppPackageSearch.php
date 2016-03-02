<?php

namespace Fungku\NetSuite\Classes;

class AppPackageSearch extends SearchRecord {
	public $basic;
	public $appDefinitionJoin;
	public $creatorJoin;
	public $packageFileJoin;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "AppPackageSearchBasic",
		"appDefinitionJoin" => "AppDefinitionSearchBasic",
		"creatorJoin" => "EmployeeSearchBasic",
		"packageFileJoin" => "FileSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

