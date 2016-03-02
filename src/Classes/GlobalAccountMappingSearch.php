<?php

namespace Fungku\NetSuite\Classes;

class GlobalAccountMappingSearch extends SearchRecord {
	public $basic;
	public $classJoin;
	public $departmentJoin;
	public $destinationAccountJoin;
	public $locationJoin;
	public $sourceAccountJoin;
	public $subsidiaryJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "GlobalAccountMappingSearchBasic",
		"classJoin" => "ClassificationSearchBasic",
		"departmentJoin" => "DepartmentSearchBasic",
		"destinationAccountJoin" => "AccountSearchBasic",
		"locationJoin" => "LocationSearchBasic",
		"sourceAccountJoin" => "AccountSearchBasic",
		"subsidiaryJoin" => "SubsidiarySearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

