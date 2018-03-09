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

class TransactionShipGroup {
    public $id;
    public $isFulfilled;
    public $weight;
    public $sourceAddressRef;
    public $sourceAddress;
    public $destinationAddressRef;
    public $destinationAddress;
    public $shippingMethodRef;
    public $shippingMethod;
    public $isHandlingTaxable;
    public $handlingTaxCode;
    public $handlingTaxRate;
    public $handlingTax2Rate;
    public $handlingRate;
    public $handlingTaxAmt;
    public $handlingTax2Amt;
    public $isShippingTaxable;
    public $shippingTaxCode;
    public $shippingTaxRate;
    public $shippingTax2Rate;
    public $shippingRate;
    public $shippingTaxAmt;
    public $shippingTax2Amt;
    static $paramtypesmap = array(
        "id" => "integer",
        "isFulfilled" => "boolean",
        "weight" => "float",
        "sourceAddressRef" => "RecordRef",
        "sourceAddress" => "string",
        "destinationAddressRef" => "RecordRef",
        "destinationAddress" => "string",
        "shippingMethodRef" => "RecordRef",
        "shippingMethod" => "string",
        "isHandlingTaxable" => "boolean",
        "handlingTaxCode" => "RecordRef",
        "handlingTaxRate" => "string",
        "handlingTax2Rate" => "string",
        "handlingRate" => "float",
        "handlingTaxAmt" => "float",
        "handlingTax2Amt" => "float",
        "isShippingTaxable" => "boolean",
        "shippingTaxCode" => "RecordRef",
        "shippingTaxRate" => "string",
        "shippingTax2Rate" => "string",
        "shippingRate" => "float",
        "shippingTaxAmt" => "float",
        "shippingTax2Amt" => "float",
    );
}
