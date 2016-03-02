<?php

namespace Fungku\NetSuite\Classes;

class CurrencyRateSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "CurrencyRateSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

