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

class EstimateItem {
    public $job;
    public $item;
    public $line;
    public $expandItemGroup;
    public $quantityAvailable;
    public $quantityOnHand;
    public $quantity;
    public $units;
    public $description;
    public $serialNumbers;
    public $price;
    public $rate;
    public $amount;
    public $options;
    public $revRecTermInMonths;
    public $department;
    public $class;
    public $location;
    public $isTaxable;
    public $altSalesAmt;
    public $taxAmount;
    public $fromJob;
    public $grossAmt;
    public $isEstimate;
    public $subscription;
    public $tax1Amt;
    public $taxCode;
    public $costEstimateType;
    public $costEstimate;
    public $excludeFromRateRequest;
    public $taxDetailsReference;
    public $taxRate1;
    public $taxRate2;
    public $shipGroup;
    public $itemIsFulfilled;
    public $shipAddress;
    public $shipMethod;
    public $expectedShipDate;
    public $chargeType;
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
