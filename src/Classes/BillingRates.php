<?php

namespace Fungku\NetSuite\Classes;

class BillingRates {
	public $currency;
	public $billingClass;
	public $rateList;
	static $paramtypesmap = array(
		"currency" => "RecordRef",
		"billingClass" => "RecordRef",
		"rateList" => "RateList",
	);
}

