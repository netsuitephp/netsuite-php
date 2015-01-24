<?php namespace Fungku\NetSuite\Classes;

class ItemDemandPlanSearch extends SearchRecord {
	public $basic;
	public $itemJoin;
	public $lastAlternateSourceItemJoin;
	public $locationJoin;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "ItemDemandPlanSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"lastAlternateSourceItemJoin" => "ItemSearchBasic",
		"locationJoin" => "LocationSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

