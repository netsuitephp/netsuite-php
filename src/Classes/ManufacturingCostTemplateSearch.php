<?php namespace Fungku\NetSuite\Classes;

class ManufacturingCostTemplateSearch extends SearchRecord {
	public $basic;
	public $itemJoin;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "ManufacturingCostTemplateSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

