<?php

namespace Fungku\NetSuite\Classes;

class BillingAccountSearch extends SearchRecord {
	public $basic;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "BillingAccountSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

