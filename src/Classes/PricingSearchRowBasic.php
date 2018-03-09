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

class PricingSearchRowBasic extends SearchRowBasic {
    public $currency;
    public $customer;
    public $internalId;
    public $item;
    public $maximumQuantity;
    public $minimumQuantity;
    public $priceLevel;
    public $quantityRange;
    public $saleUnit;
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
