<?php

class ItemSupplyPlanSearch extends SearchRecord {
	public $basic;
	public $itemJoin;
	public $locationJoin;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "ItemSupplyPlanSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"locationJoin" => "LocationSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

