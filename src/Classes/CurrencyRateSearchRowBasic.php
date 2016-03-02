<?php

namespace Fungku\NetSuite\Classes;

class CurrencyRateSearchRowBasic extends SearchRowBasic {
	public $baseCurrency;
	public $effectiveDate;
	public $exchangeRate;
	public $internalId;
	public $transactionCurrency;
	static $paramtypesmap = array(
		"baseCurrency" => "SearchColumnSelectField[]",
		"effectiveDate" => "SearchColumnDateField[]",
		"exchangeRate" => "SearchColumnDoubleField[]",
		"internalId" => "SearchColumnSelectField[]",
		"transactionCurrency" => "SearchColumnSelectField[]",
	);
}

