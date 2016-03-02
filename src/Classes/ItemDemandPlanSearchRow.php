<?php

namespace Fungku\NetSuite\Classes;

class ItemDemandPlanSearchRow extends SearchRow {
	public $basic;
	public $itemJoin;
	public $lastAlternateSourceItemJoin;
	public $locationJoin;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "ItemDemandPlanSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"lastAlternateSourceItemJoin" => "ItemSearchRowBasic",
		"locationJoin" => "LocationSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

