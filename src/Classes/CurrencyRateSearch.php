<?php

namespace Fungku\NetSuite\Classes;

class CurrencyRateSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "CurrencyRateSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

