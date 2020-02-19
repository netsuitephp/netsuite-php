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
 * generated:  2020-02-19 09:58:55 AM CST
 */

namespace NetSuite\Classes;

class CustomSaleItem {
    public $item;
    public $line;
    public $description;
    public $amount;
    public $isTaxable;
    public $options;
    public $deferRevRec;
    public $quantity;
    public $currentPercent;
    public $units;
    public $inventoryDetail;
    public $serialNumbers;
    public $binNumbers;
    public $price;
    public $rate;
    public $percentComplete;
    public $quantityOnHand;
    public $quantityAvailable;
    public $quantityRemaining;
    public $department;
    public $licenseCode;
    public $class;
    public $location;
    public $revRecSchedule;
    public $revRecStartDate;
    public $revRecEndDate;
    public $grossAmt;
    public $costEstimateType;
    public $costEstimate;
    public $taxDetailsReference;
    public $excludeFromRateRequest;
    public $catchUpPeriod;
    public $giftCertFrom;
    public $giftCertRecipientName;
    public $giftCertRecipientEmail;
    public $giftCertMessage;
    public $taxAmount;
    public $vsoeSopGroup;
    public $vsoeIsEstimate;
    public $vsoePrice;
    public $vsoeAmount;
    public $vsoeAllocation;
    public $vsoeDeferral;
    public $vsoePermitDiscount;
    public $vsoeDelivered;
    public $customFieldList;
    static $paramtypesmap = array(
        "item" => "RecordRef",
        "line" => "integer",
        "description" => "string",
        "amount" => "float",
        "isTaxable" => "boolean",
        "options" => "CustomFieldList",
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
        "quantityRemaining" => "float",
        "department" => "RecordRef",
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
        "giftCertFrom" => "string",
        "giftCertRecipientName" => "string",
        "giftCertRecipientEmail" => "string",
        "giftCertMessage" => "string",
        "taxAmount" => "float",
        "vsoeSopGroup" => "VsoeSopGroup",
        "vsoeIsEstimate" => "boolean",
        "vsoePrice" => "float",
        "vsoeAmount" => "float",
        "vsoeAllocation" => "float",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "customFieldList" => "CustomFieldList",
    );
}
