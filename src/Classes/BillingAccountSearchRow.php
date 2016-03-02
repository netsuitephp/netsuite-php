<?php

namespace Fungku\NetSuite\Classes;

class BillingAccountSearchRow extends SearchRow {
	public $basic;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "BillingAccountSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

