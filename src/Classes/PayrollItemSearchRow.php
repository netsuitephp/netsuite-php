<?php

namespace Fungku\NetSuite\Classes;

class PayrollItemSearchRow extends SearchRow {
	public $basic;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "PayrollItemSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

