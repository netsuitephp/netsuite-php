<?php namespace Fungku\NetSuite\Classes;

class Currency extends Record {
	public $name;
	public $symbol;
	public $isBaseCurrency;
	public $isInactive;
	public $overrideCurrencyFormat;
	public $displaySymbol;
	public $symbolPlacement;
	public $locale;
	public $formatSample;
	public $exchangeRate;
	public $fxRateUpdateTimezone;
	public $inclInFxRateUpdates;
	public $currencyPrecision;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"symbol" => "string",
		"isBaseCurrency" => "boolean",
		"isInactive" => "boolean",
		"overrideCurrencyFormat" => "boolean",
		"displaySymbol" => "string",
		"symbolPlacement" => "CurrencySymbolPlacement",
		"locale" => "CurrencyLocale",
		"formatSample" => "string",
		"exchangeRate" => "float",
		"fxRateUpdateTimezone" => "CurrencyFxRateUpdateTimezone",
		"inclInFxRateUpdates" => "boolean",
		"currencyPrecision" => "CurrencyCurrencyPrecision",
		"internalId" => "string",
		"externalId" => "string",
	);
}

