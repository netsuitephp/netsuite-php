<?php

class CurrencyRateFilter {
	public $baseCurrency;
	public $fromCurrency;
	public $effectiveDate;
	static $paramtypesmap = array(
		"baseCurrency" => "RecordRef",
		"fromCurrency" => "RecordRef",
		"effectiveDate" => "dateTime",
	);
}

