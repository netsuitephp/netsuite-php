<?php

class ItemRevisionSearch extends SearchRecord {
	public $basic;
	public $itemJoin;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "ItemRevisionSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

