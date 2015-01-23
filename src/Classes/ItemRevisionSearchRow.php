<?php

class ItemRevisionSearchRow extends SearchRow {
	public $basic;
	public $itemJoin;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "ItemRevisionSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

