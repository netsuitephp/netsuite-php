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

class EstimateItem {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $job;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var integer
     */
    public $line;
    /**
     * @var boolean
     */
    public $expandItemGroup;
    /**
     * @var float
     */
    public $quantityAvailable;
    /**
     * @var float
     */
    public $quantityOnHand;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $units;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $price;
    /**
     * @var string
     */
    public $rate;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $options;
    /**
     * @var integer
     */
    public $revRecTermInMonths;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var boolean
     */
    public $isTaxable;
    /**
     * @var float
     */
    public $altSalesAmt;
    /**
     * @var float
     */
    public $taxAmount;
    /**
     * @var boolean
     */
    public $fromJob;
    /**
     * @var float
     */
    public $grossAmt;
    /**
     * @var boolean
     */
    public $isEstimate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subscription;
    /**
     * @var float
     */
    public $tax1Amt;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxCode;
    /**
     * @var \NetSuite\Classes\ItemCostEstimateType
     */
    public $costEstimateType;
    /**
     * @var float
     */
    public $costEstimate;
    /**
     * @var boolean
     */
    public $excludeFromRateRequest;
    /**
     * @var string
     */
    public $taxDetailsReference;
    /**
     * @var float
     */
    public $taxRate1;
    /**
     * @var float
     */
    public $taxRate2;
    /**
     * @var integer
     */
    public $shipGroup;
    /**
     * @var boolean
     */
    public $itemIsFulfilled;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shipAddress;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shipMethod;
    /**
     * @var string
     */
    public $expectedShipDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $chargeType;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "job" => "RecordRef",
        "item" => "RecordRef",
        "line" => "integer",
        "expandItemGroup" => "boolean",
        "quantityAvailable" => "float",
        "quantityOnHand" => "float",
        "quantity" => "float",
        "units" => "RecordRef",
        "description" => "string",
        "serialNumbers" => "string",
        "price" => "RecordRef",
        "rate" => "string",
        "amount" => "float",
        "options" => "CustomFieldList",
        "revRecTermInMonths" => "integer",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "isTaxable" => "boolean",
        "altSalesAmt" => "float",
        "taxAmount" => "float",
        "fromJob" => "boolean",
        "grossAmt" => "float",
        "isEstimate" => "boolean",
        "subscription" => "RecordRef",
        "tax1Amt" => "float",
        "taxCode" => "RecordRef",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "excludeFromRateRequest" => "boolean",
        "taxDetailsReference" => "string",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "shipGroup" => "integer",
        "itemIsFulfilled" => "boolean",
        "shipAddress" => "RecordRef",
        "shipMethod" => "RecordRef",
        "expectedShipDate" => "dateTime",
        "chargeType" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );
}
