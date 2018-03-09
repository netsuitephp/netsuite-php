<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2017-08-01 09:12:52 PM UTC
 */

namespace NetSuite\Classes;

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
