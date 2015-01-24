<?php namespace Fungku\NetSuite\Classes;

class ManufacturingCostTemplateSearchRow extends SearchRow {
	public $basic;
	public $itemJoin;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "ManufacturingCostTemplateSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

