<?php

namespace Fungku\NetSuite\Classes;

class PromotionCodeSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "PromotionCodeSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

