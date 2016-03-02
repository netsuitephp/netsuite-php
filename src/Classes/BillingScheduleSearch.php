<?php

namespace Fungku\NetSuite\Classes;

class BillingScheduleSearch extends SearchRecord {
	public $basic;
	static $paramtypesmap = array(
		"basic" => "BillingScheduleSearchBasic",
	);
}

