<?php

namespace Fungku\NetSuite\Classes;

class CurrencyRate_core {
	public $baseCurrency;
	public $fromCurrency;
	public $exchangeRate;
	public $effectiveDate;
	static $paramtypesmap = array(
		"baseCurrency" => "RecordRef",
		"fromCurrency" => "RecordRef",
		"exchangeRate" => "float",
		"effectiveDate" => "dateTime",
	);
}

