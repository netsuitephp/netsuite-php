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

class CurrencyRateSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $baseCurrency;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $effectiveDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $exchangeRate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $transactionCurrency;
    static $paramtypesmap = array(
        "baseCurrency" => "SearchColumnSelectField[]",
        "effectiveDate" => "SearchColumnDateField[]",
        "exchangeRate" => "SearchColumnDoubleField[]",
        "internalId" => "SearchColumnSelectField[]",
        "transactionCurrency" => "SearchColumnSelectField[]",
    );
}
