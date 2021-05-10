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

class TransactionShipGroup {
    /**
     * @var integer
     */
    public $id;
    /**
     * @var boolean
     */
    public $isFulfilled;
    /**
     * @var float
     */
    public $weight;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $sourceAddressRef;
    /**
     * @var string
     */
    public $sourceAddress;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $destinationAddressRef;
    /**
     * @var string
     */
    public $destinationAddress;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shippingMethodRef;
    /**
     * @var string
     */
    public $shippingMethod;
    /**
     * @var boolean
     */
    public $isHandlingTaxable;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $handlingTaxCode;
    /**
     * @var string
     */
    public $handlingTaxRate;
    /**
     * @var string
     */
    public $handlingTax2Rate;
    /**
     * @var float
     */
    public $handlingRate;
    /**
     * @var float
     */
    public $handlingTaxAmt;
    /**
     * @var float
     */
    public $handlingTax2Amt;
    /**
     * @var boolean
     */
    public $isShippingTaxable;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shippingTaxCode;
    /**
     * @var string
     */
    public $shippingTaxRate;
    /**
     * @var string
     */
    public $shippingTax2Rate;
    /**
     * @var float
     */
    public $shippingRate;
    /**
     * @var float
     */
    public $shippingTaxAmt;
    /**
     * @var float
     */
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
