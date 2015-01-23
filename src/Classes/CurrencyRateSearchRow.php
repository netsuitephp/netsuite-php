<?php

class CurrencyRateSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "CurrencyRateSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

