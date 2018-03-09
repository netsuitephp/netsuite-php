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

class CashRefundItem {
    public $job;
    public $item;
    public $line;
    public $orderLine;
    public $quantity;
    public $units;
    public $inventoryDetail;
    public $binNumbers;
    public $serialNumbers;
    public $description;
    public $price;
    public $rate;
    public $amount;
    public $taxCode;
    public $taxRate1;
    public $taxRate2;
    public $tax1Amt;
    public $grossAmt;
    public $isTaxable;
    public $options;
    public $department;
    public $class;
    public $location;
    public $revRecSchedule;
    public $revRecStartDate;
    public $revRecEndDate;
    public $catchUpPeriod;
    public $deferRevRec;
    public $giftCertFrom;
    public $costEstimateType;
    public $costEstimate;
    public $taxDetailsReference;
    public $giftCertRecipientName;
    public $giftCertRecipientEmail;
    public $giftCertMessage;
    public $taxAmount;
    public $giftCertNumber;
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
        "orderLine" => "integer",
        "quantity" => "float",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "binNumbers" => "string",
        "serialNumbers" => "string",
        "description" => "string",
        "price" => "RecordRef",
        "rate" => "string",
        "amount" => "float",
        "taxCode" => "RecordRef",
        "taxRate1" => "string",
        "taxRate2" => "string",
        "tax1Amt" => "float",
        "grossAmt" => "float",
        "isTaxable" => "boolean",
        "options" => "CustomFieldList",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "catchUpPeriod" => "RecordRef",
        "deferRevRec" => "boolean",
        "giftCertFrom" => "string",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "taxDetailsReference" => "string",
        "giftCertRecipientName" => "string",
        "giftCertRecipientEmail" => "string",
        "giftCertMessage" => "string",
        "taxAmount" => "float",
        "giftCertNumber" => "string",
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
