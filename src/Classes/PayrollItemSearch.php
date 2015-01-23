<?php

class PayrollItemSearch extends SearchRecord {
	public $basic;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "PayrollItemSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

