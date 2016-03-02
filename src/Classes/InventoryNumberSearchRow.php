<?php

namespace Fungku\NetSuite\Classes;

class InventoryNumberSearchRow extends SearchRow {
	public $basic;
	public $itemJoin;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "InventoryNumberSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

