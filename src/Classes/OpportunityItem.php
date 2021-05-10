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

class OpportunityItem {
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
     * @var float
     */
    public $altSalesAmt;
    /**
     * @var integer
     */
    public $revRecTermInMonths;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $options;
    /**
     * @var boolean
     */
    public $fromJob;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var boolean
     */
    public $isEstimate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\ItemCostEstimateType
     */
    public $costEstimateType;
    /**
     * @var float
     */
    public $costEstimate;
    /**
     * @var float
     */
    public $taxAmount;
    /**
     * @var string
     */
    public $taxDetailsReference;
    /**
     * @var float
     */
    public $grossAmt;
    /**
     * @var float
     */
    public $tax1Amt;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxCode;
    /**
     * @var float
     */
    public $taxRate1;
    /**
     * @var float
     */
    public $taxRate2;
    /**
     * @var string
     */
    public $expectedShipDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subscription;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
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
