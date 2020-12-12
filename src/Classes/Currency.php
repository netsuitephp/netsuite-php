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
 * generated:  2020-12-11 06:57:10 PM PST
 */

namespace NetSuite\Classes;

class Currency extends Record {
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $symbol;
    /**
     * @var boolean
     */
    public $isBaseCurrency;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var boolean
     */
    public $overrideCurrencyFormat;
    /**
     * @var string
     */
    public $displaySymbol;
    /**
     * @var \NetSuite\Classes\CurrencySymbolPlacement
     */
    public $symbolPlacement;
    /**
     * @var \NetSuite\Classes\CurrencyLocale
     */
    public $locale;
    /**
     * @var string
     */
    public $formatSample;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var \NetSuite\Classes\CurrencyFxRateUpdateTimezone
     */
    public $fxRateUpdateTimezone;
    /**
     * @var boolean
     */
    public $inclInFxRateUpdates;
    /**
     * @var \NetSuite\Classes\CurrencyCurrencyPrecision
     */
    public $currencyPrecision;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
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
