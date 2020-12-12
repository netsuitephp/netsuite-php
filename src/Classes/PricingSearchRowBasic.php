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

class PricingSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $customer;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $maximumQuantity;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $minimumQuantity;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $priceLevel;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $quantityRange;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $saleUnit;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $unitPrice;
    static $paramtypesmap = array(
        "currency" => "SearchColumnSelectField[]",
        "customer" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "item" => "SearchColumnSelectField[]",
        "maximumQuantity" => "SearchColumnDoubleField[]",
        "minimumQuantity" => "SearchColumnDoubleField[]",
        "priceLevel" => "SearchColumnSelectField[]",
        "quantityRange" => "SearchColumnStringField[]",
        "saleUnit" => "SearchColumnSelectField[]",
        "unitPrice" => "SearchColumnDoubleField[]",
    );
}
