<?php

namespace Fungku\NetSuite\Classes;

class ManufacturingRoutingSearchRow extends SearchRow {
	public $basic;
	public $itemJoin;
	public $locationJoin;
	public $manufacturingCostTemplateJoin;
	public $manufacturingWorkCenterJoin;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "ManufacturingRoutingSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"locationJoin" => "LocationSearchRowBasic",
		"manufacturingCostTemplateJoin" => "ManufacturingCostTemplateSearchRowBasic",
		"manufacturingWorkCenterJoin" => "EntityGroupSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

