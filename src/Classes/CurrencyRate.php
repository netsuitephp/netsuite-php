<?php

class CurrencyRate extends Record {
	public $baseCurrency;
	public $transactionCurrency;
	public $exchangeRate;
	public $effectiveDate;
	public $internalId;
	static $paramtypesmap = array(
		"baseCurrency" => "RecordRef",
		"transactionCurrency" => "RecordRef",
		"exchangeRate" => "float",
		"effectiveDate" => "dateTime",
		"internalId" => "string",
	);
}

