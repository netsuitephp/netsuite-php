<?php namespace Fungku\NetSuite\Classes;

class BillingRatesMatrix {
	public $billingRates;
	public $replaceAll;
	static $paramtypesmap = array(
		"billingRates" => "BillingRates[]",
		"replaceAll" => "boolean",
	);
}

