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

class InvoiceItem {
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
     * @var string
     */
    public $description;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var boolean
     */
    public $isTaxable;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $options;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subscriptionLine;
    /**
     * @var boolean
     */
    public $deferRevRec;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var float
     */
    public $currentPercent;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $units;
    /**
     * @var \NetSuite\Classes\InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var string
     */
    public $binNumbers;
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
    public $percentComplete;
    /**
     * @var float
     */
    public $quantityOnHand;
    /**
     * @var float
     */
    public $quantityAvailable;
    /**
     * @var float
     */
    public $quantityOrdered;
    /**
     * @var float
     */
    public $quantityRemaining;
    /**
     * @var float
     */
    public $quantityFulfilled;
    /**
     * @var float
     */
    public $amountOrdered;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var integer
     */
    public $orderLine;
    /**
     * @var string
     */
    public $licenseCode;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $revRecSchedule;
    /**
     * @var string
     */
    public $revRecStartDate;
    /**
     * @var string
     */
    public $revRecEndDate;
    /**
     * @var float
     */
    public $grossAmt;
    /**
     * @var \NetSuite\Classes\ItemCostEstimateType
     */
    public $costEstimateType;
    /**
     * @var float
     */
    public $costEstimate;
    /**
     * @var string
     */
    public $taxDetailsReference;
    /**
     * @var boolean
     */
    public $excludeFromRateRequest;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $catchUpPeriod;
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
    public $giftCertFrom;
    /**
     * @var string
     */
    public $giftCertRecipientName;
    /**
     * @var string
     */
    public $giftCertRecipientEmail;
    /**
     * @var string
     */
    public $giftCertMessage;
    /**
     * @var float
     */
    public $taxAmount;
    /**
     * @var string
     */
    public $giftCertNumber;
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
     * @var \NetSuite\Classes\VsoeSopGroup
     */
    public $vsoeSopGroup;
    /**
     * @var boolean
     */
    public $vsoeIsEstimate;
    /**
     * @var float
     */
    public $vsoePrice;
    /**
     * @var float
     */
    public $vsoeAmount;
    /**
     * @var float
     */
    public $vsoeAllocation;
    /**
     * @var \NetSuite\Classes\VsoeDeferral
     */
    public $vsoeDeferral;
    /**
     * @var \NetSuite\Classes\VsoePermitDiscount
     */
    public $vsoePermitDiscount;
    /**
     * @var boolean
     */
    public $vsoeDelivered;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $chargeType;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $chargesList;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "job" => "RecordRef",
        "item" => "RecordRef",
        "line" => "integer",
        "description" => "string",
        "amount" => "float",
        "isTaxable" => "boolean",
        "options" => "CustomFieldList",
        "subscriptionLine" => "RecordRef",
        "deferRevRec" => "boolean",
        "quantity" => "float",
        "currentPercent" => "float",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "serialNumbers" => "string",
        "binNumbers" => "string",
        "price" => "RecordRef",
        "rate" => "string",
        "percentComplete" => "float",
        "quantityOnHand" => "float",
        "quantityAvailable" => "float",
        "quantityOrdered" => "float",
        "quantityRemaining" => "float",
        "quantityFulfilled" => "float",
        "amountOrdered" => "float",
        "department" => "RecordRef",
        "orderLine" => "integer",
        "licenseCode" => "string",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "grossAmt" => "float",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "taxDetailsReference" => "string",
        "excludeFromRateRequest" => "boolean",
        "catchUpPeriod" => "RecordRef",
        "tax1Amt" => "float",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "giftCertFrom" => "string",
        "giftCertRecipientName" => "string",
        "giftCertRecipientEmail" => "string",
        "giftCertMessage" => "string",
        "taxAmount" => "float",
        "giftCertNumber" => "string",
        "shipGroup" => "integer",
        "itemIsFulfilled" => "boolean",
        "shipAddress" => "RecordRef",
        "shipMethod" => "RecordRef",
        "vsoeSopGroup" => "VsoeSopGroup",
        "vsoeIsEstimate" => "boolean",
        "vsoePrice" => "float",
        "vsoeAmount" => "float",
        "vsoeAllocation" => "float",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "chargeType" => "RecordRef",
        "chargesList" => "RecordRefList",
        "customFieldList" => "CustomFieldList",
    );
}
