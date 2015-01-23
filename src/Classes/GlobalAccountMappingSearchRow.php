<?php

class GlobalAccountMappingSearchRow extends SearchRow {
	public $basic;
	public $classJoin;
	public $departmentJoin;
	public $destinationAccountJoin;
	public $locationJoin;
	public $sourceAccountJoin;
	public $subsidiaryJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "GlobalAccountMappingSearchRowBasic",
		"classJoin" => "ClassificationSearchRowBasic",
		"departmentJoin" => "DepartmentSearchRowBasic",
		"destinationAccountJoin" => "AccountSearchRowBasic",
		"locationJoin" => "LocationSearchRowBasic",
		"sourceAccountJoin" => "AccountSearchRowBasic",
		"subsidiaryJoin" => "SubsidiarySearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

