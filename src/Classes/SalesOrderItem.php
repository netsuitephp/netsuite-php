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

class SalesOrderItem {
    public $job;
    public $subscription;
    public $item;
    public $quantityAvailable;
    public $expandItemGroup;
    public $lineUniqueKey;
    public $quantityOnHand;
    public $quantity;
    public $units;
    public $inventoryDetail;
    public $description;
    public $price;
    public $rate;
    public $serialNumbers;
    public $amount;
    public $isTaxable;
    public $commitInventory;
    public $orderPriority;
    public $licenseCode;
    public $options;
    public $department;
    public $class;
    public $location;
    public $createPo;
    public $createdPo;
    public $altSalesAmt;
    public $createWo;
    public $poVendor;
    public $poCurrency;
    public $poRate;
    public $revRecSchedule;
    public $revRecStartDate;
    public $revRecTermInMonths;
    public $revRecEndDate;
    public $deferRevRec;
    public $isClosed;
    public $itemFulfillmentChoice;
    public $catchUpPeriod;
    public $billingSchedule;
    public $fromJob;
    public $grossAmt;
    public $taxAmount;
    public $excludeFromRateRequest;
    public $isEstimate;
    public $line;
    public $percentComplete;
    public $costEstimateType;
    public $costEstimate;
    public $quantityBackOrdered;
    public $quantityBilled;
    public $quantityCommitted;
    public $quantityFulfilled;
    public $quantityPacked;
    public $quantityPicked;
    public $tax1Amt;
    public $taxCode;
    public $taxRate1;
    public $taxRate2;
    public $giftCertFrom;
    public $giftCertRecipientName;
    public $giftCertRecipientEmail;
    public $giftCertMessage;
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
    public $expectedShipDate;
    public $noAutoAssignLocation;
    public $locationAutoAssigned;
    public $taxDetailsReference;
    public $chargeType;
    public $customFieldList;
    static $paramtypesmap = array(
        "job" => "RecordRef",
        "subscription" => "RecordRef",
        "item" => "RecordRef",
        "quantityAvailable" => "float",
        "expandItemGroup" => "boolean",
        "lineUniqueKey" => "integer",
        "quantityOnHand" => "float",
        "quantity" => "float",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "description" => "string",
        "price" => "RecordRef",
        "rate" => "string",
        "serialNumbers" => "string",
        "amount" => "float",
        "isTaxable" => "boolean",
        "commitInventory" => "SalesOrderItemCommitInventory",
        "orderPriority" => "float",
        "licenseCode" => "string",
        "options" => "CustomFieldList",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "createPo" => "SalesOrderItemCreatePo",
        "createdPo" => "RecordRef",
        "altSalesAmt" => "float",
        "createWo" => "boolean",
        "poVendor" => "RecordRef",
        "poCurrency" => "string",
        "poRate" => "float",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecTermInMonths" => "integer",
        "revRecEndDate" => "dateTime",
        "deferRevRec" => "boolean",
        "isClosed" => "boolean",
        "itemFulfillmentChoice" => "SalesOrderItemFulfillmentChoice",
        "catchUpPeriod" => "RecordRef",
        "billingSchedule" => "RecordRef",
        "fromJob" => "boolean",
        "grossAmt" => "float",
        "taxAmount" => "float",
        "excludeFromRateRequest" => "boolean",
        "isEstimate" => "boolean",
        "line" => "integer",
        "percentComplete" => "float",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "quantityBackOrdered" => "float",
        "quantityBilled" => "float",
        "quantityCommitted" => "float",
        "quantityFulfilled" => "float",
        "quantityPacked" => "float",
        "quantityPicked" => "float",
        "tax1Amt" => "float",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "giftCertFrom" => "string",
        "giftCertRecipientName" => "string",
        "giftCertRecipientEmail" => "string",
        "giftCertMessage" => "string",
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
        "expectedShipDate" => "dateTime",
        "noAutoAssignLocation" => "boolean",
        "locationAutoAssigned" => "boolean",
        "taxDetailsReference" => "string",
        "chargeType" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );
}
