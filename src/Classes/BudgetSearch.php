<?php

namespace Fungku\NetSuite\Classes;

class BudgetSearch extends SearchRecord {
	public $basic;
	static $paramtypesmap = array(
		"basic" => "BudgetSearchBasic",
	);
}

