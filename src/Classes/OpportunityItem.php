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

class OpportunityItem {
    public $job;
    public $item;
    public $line;
    public $quantityAvailable;
    public $quantityOnHand;
    public $quantity;
    public $units;
    public $description;
    public $price;
    public $rate;
    public $amount;
    public $altSalesAmt;
    public $revRecTermInMonths;
    public $options;
    public $fromJob;
    public $department;
    public $isEstimate;
    public $location;
    public $class;
    public $costEstimateType;
    public $costEstimate;
    public $taxAmount;
    public $taxDetailsReference;
    public $grossAmt;
    public $tax1Amt;
    public $taxCode;
    public $taxRate1;
    public $taxRate2;
    public $expectedShipDate;
    public $subscription;
    public $customFieldList;
    static $paramtypesmap = array(
        "job" => "RecordRef",
        "item" => "RecordRef",
        "line" => "integer",
        "quantityAvailable" => "float",
        "quantityOnHand" => "float",
        "quantity" => "float",
        "units" => "RecordRef",
        "description" => "string",
        "price" => "RecordRef",
        "rate" => "string",
        "amount" => "float",
        "altSalesAmt" => "float",
        "revRecTermInMonths" => "integer",
        "options" => "CustomFieldList",
        "fromJob" => "boolean",
        "department" => "RecordRef",
        "isEstimate" => "boolean",
        "location" => "RecordRef",
        "class" => "RecordRef",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "taxAmount" => "float",
        "taxDetailsReference" => "string",
        "grossAmt" => "float",
        "tax1Amt" => "float",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "expectedShipDate" => "dateTime",
        "subscription" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );
}
