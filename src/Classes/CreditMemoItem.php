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

class CreditMemoItem {
    public $job;
    public $item;
    public $orderLine;
    public $line;
    public $quantity;
    public $description;
    public $binNumbers;
    public $price;
    public $rate;
    public $amount;
    public $isTaxable;
    public $options;
    public $shipAddress;
    public $shipCarrier;
    public $shipMethod;
    public $taxCode;
    public $taxRate1;
    public $taxRate2;
    public $tax1Amt;
    public $grossAmt;
    public $department;
    public $class;
    public $location;
    public $costEstimateType;
    public $costEstimate;
    public $taxDetailsReference;
    public $revRecSchedule;
    public $revRecStartDate;
    public $revRecTermInMonths;
    public $revRecEndDate;
    public $units;
    public $inventoryDetail;
    public $serialNumbers;
    public $deferRevRec;
    public $giftCertFrom;
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
    public $catchUpPeriod;
    public $chargeType;
    public $subscriptionLine;
    public $chargesList;
    public $customFieldList;
    static $paramtypesmap = array(
        "job" => "RecordRef",
        "item" => "RecordRef",
        "orderLine" => "integer",
        "line" => "integer",
        "quantity" => "float",
        "description" => "string",
        "binNumbers" => "string",
        "price" => "RecordRef",
        "rate" => "string",
        "amount" => "float",
        "isTaxable" => "boolean",
        "options" => "CustomFieldList",
        "shipAddress" => "RecordRef",
        "shipCarrier" => "ShippingCarrier",
        "shipMethod" => "RecordRef",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "tax1Amt" => "float",
        "grossAmt" => "float",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "taxDetailsReference" => "string",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecTermInMonths" => "integer",
        "revRecEndDate" => "dateTime",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "serialNumbers" => "string",
        "deferRevRec" => "boolean",
        "giftCertFrom" => "string",
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
        "catchUpPeriod" => "RecordRef",
        "chargeType" => "RecordRef",
        "subscriptionLine" => "RecordRef",
        "chargesList" => "RecordRefList",
        "customFieldList" => "CustomFieldList",
    );
}
