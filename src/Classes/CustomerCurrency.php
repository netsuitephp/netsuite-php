<?php
/**
 * This file is part of the netsuitephp/netsuite-php library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/netsuitephp/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/netsuitephp/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 */

namespace NetSuite\Classes;

class CustomerCurrency {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $balance;
    /**
     * @var float
     */
    public $consolBalance;
    /**
     * @var float
     */
    public $depositBalance;
    /**
     * @var float
     */
    public $consolDepositBalance;
    /**
     * @var float
     */
    public $overdueBalance;
    /**
     * @var float
     */
    public $consolOverdueBalance;
    /**
     * @var float
     */
    public $unbilledOrders;
    /**
     * @var float
     */
    public $consolUnbilledOrders;
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
