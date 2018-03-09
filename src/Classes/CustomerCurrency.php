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

class CustomerCurrency {
    public $currency;
    public $balance;
    public $consolBalance;
    public $depositBalance;
    public $consolDepositBalance;
    public $overdueBalance;
    public $consolOverdueBalance;
    public $unbilledOrders;
    public $consolUnbilledOrders;
    public $overrideCurrencyFormat;
    public $displaySymbol;
    public $symbolPlacement;
    static $paramtypesmap = array(
        "currency" => "RecordRef",
        "balance" => "float",
        "consolBalance" => "float",
        "depositBalance" => "float",
        "consolDepositBalance" => "float",
        "overdueBalance" => "float",
        "consolOverdueBalance" => "float",
        "unbilledOrders" => "float",
        "consolUnbilledOrders" => "float",
        "overrideCurrencyFormat" => "boolean",
        "displaySymbol" => "string",
        "symbolPlacement" => "CurrencySymbolPlacement",
    );
}
