<?php

namespace Fungku\NetSuite\Classes;

class ItemSupplyPlanSearchRow extends SearchRow {
	public $basic;
	public $itemJoin;
	public $locationJoin;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "ItemSupplyPlanSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"locationJoin" => "LocationSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

