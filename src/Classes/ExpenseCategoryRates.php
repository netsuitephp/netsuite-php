<?php namespace Fungku\NetSuite\Classes;

class ExpenseCategoryRates {
	public $subsidiary;
	public $currency;
	public $defaultRate;
	static $paramtypesmap = array(
		"subsidiary" => "RecordRef",
		"currency" => "RecordRef",
		"defaultRate" => "float",
	);
}

