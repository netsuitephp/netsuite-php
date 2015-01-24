<?php namespace Fungku\NetSuite\Classes;

class ManufacturingRoutingSearch extends SearchRecord {
	public $basic;
	public $itemJoin;
	public $locationJoin;
	public $manufacturingCostTemplateJoin;
	public $manufacturingWorkCenterJoin;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "ManufacturingRoutingSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"locationJoin" => "LocationSearchBasic",
		"manufacturingCostTemplateJoin" => "ManufacturingCostTemplateSearchBasic",
		"manufacturingWorkCenterJoin" => "EntityGroupSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

