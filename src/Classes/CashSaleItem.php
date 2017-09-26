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

class CashSaleItem {
    public $job;
    public $item;
    public $line;
    public $quantityAvailable;
    public $quantityOnHand;
    public $quantityFulfilled;
    public $quantity;
    public $units;
    public $inventoryDetail;
    public $serialNumbers;
    public $binNumbers;
    public $description;
    public $price;
    public $rate;
    public $amount;
    public $orderLine;
    public $licenseCode;
    public $isTaxable;
    public $options;
    public $deferRevRec;
    public $currentPercent;
    public $department;
    public $percentComplete;
    public $class;
    public $location;
    public $revRecSchedule;
    public $revRecStartDate;
    public $revRecEndDate;
    public $subscriptionLine;
    public $grossAmt;
    public $costEstimateType;
    public $excludeFromRateRequest;
    public $catchUpPeriod;
    public $costEstimate;
    public $taxDetailsReference;
    public $amountOrdered;
    public $tax1Amt;
    public $quantityOrdered;
    public $quantityRemaining;
    public $taxCode;
    public $taxRate1;
    public $taxRate2;
    public $giftCertFrom;
    public $giftCertRecipientName;
    public $giftCertRecipientEmail;
    public $giftCertMessage;
    public $taxAmount;
    public $giftCertNumber;
    public $shipGroup;
    public $itemIsFulfilled;
    public $shipAddress;
    public $shipMethod;
    public $vsoeSopGroup;
    public $vsoeIsEstimate;
    public $vsoePrice;
    public $vsoeAmount;
    public $vsoeAllocation;
    public $vsoeDeferral;
    public $vsoePermitDiscount;
    public $vsoeDelivered;
    public $chargeType;
    public $chargesList;
    public $customFieldList;
    static $paramtypesmap = array(
        "job" => "RecordRef",
        "item" => "RecordRef",
        "line" => "integer",
        "quantityAvailable" => "float",
        "quantityOnHand" => "float",
        "quantityFulfilled" => "float",
        "quantity" => "float",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "serialNumbers" => "string",
        "binNumbers" => "string",
        "description" => "string",
        "price" => "RecordRef",
        "rate" => "string",
        "amount" => "float",
        "orderLine" => "integer",
        "licenseCode" => "string",
        "isTaxable" => "boolean",
        "options" => "CustomFieldList",
        "deferRevRec" => "boolean",
        "currentPercent" => "float",
        "department" => "RecordRef",
        "percentComplete" => "float",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "subscriptionLine" => "RecordRef",
        "grossAmt" => "float",
        "costEstimateType" => "ItemCostEstimateType",
        "excludeFromRateRequest" => "boolean",
        "catchUpPeriod" => "RecordRef",
        "costEstimate" => "float",
        "taxDetailsReference" => "string",
        "amountOrdered" => "float",
        "tax1Amt" => "float",
        "quantityOrdered" => "float",
        "quantityRemaining" => "float",
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
