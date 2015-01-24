<?php namespace Fungku\NetSuite\Classes;

class CurrencyRateSearchBasic extends SearchRecordBasic {
	public $baseCurrency;
	public $effectiveDate;
	public $exchangeRate;
	public $internalId;
	public $internalIdNumber;
	public $transactionCurrency;
	static $paramtypesmap = array(
		"baseCurrency" => "SearchMultiSelectField",
		"effectiveDate" => "SearchDateField",
		"exchangeRate" => "SearchDoubleField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"transactionCurrency" => "SearchMultiSelectField",
	);
}

