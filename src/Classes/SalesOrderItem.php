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

class SalesOrderItem {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $job;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subscription;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var float
     */
    public $quantityAvailable;
    /**
     * @var boolean
     */
    public $expandItemGroup;
    /**
     * @var integer
     */
    public $lineUniqueKey;
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
     * @var \NetSuite\Classes\InventoryDetail
     */
    public $inventoryDetail;
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
     * @var string
     */
    public $serialNumbers;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var boolean
     */
    public $isTaxable;
    /**
     * @var \NetSuite\Classes\SalesOrderItemCommitInventory
     */
    public $commitInventory;
    /**
     * @var float
     */
    public $orderPriority;
    /**
     * @var string
     */
    public $licenseCode;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $options;
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
     * @var \NetSuite\Classes\SalesOrderItemCreatePo
     */
    public $createPo;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $createdPo;
    /**
     * @var float
     */
    public $altSalesAmt;
    /**
     * @var boolean
     */
    public $createWo;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $poVendor;
    /**
     * @var string
     */
    public $poCurrency;
    /**
     * @var float
     */
    public $poRate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $revRecSchedule;
    /**
     * @var string
     */
    public $revRecStartDate;
    /**
     * @var integer
     */
    public $revRecTermInMonths;
    /**
     * @var string
     */
    public $revRecEndDate;
    /**
     * @var boolean
     */
    public $deferRevRec;
    /**
     * @var boolean
     */
    public $isClosed;
    /**
     * @var \NetSuite\Classes\SalesOrderItemFulfillmentChoice
     */
    public $itemFulfillmentChoice;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $catchUpPeriod;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billingSchedule;
    /**
     * @var boolean
     */
    public $fromJob;
    /**
     * @var float
     */
    public $grossAmt;
    /**
     * @var float
     */
    public $taxAmount;
    /**
     * @var boolean
     */
    public $excludeFromRateRequest;
    /**
     * @var boolean
     */
    public $isEstimate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $inventoryLocation;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $inventorySubsidiary;
    /**
     * @var integer
     */
    public $line;
    /**
     * @var float
     */
    public $percentComplete;
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
    public $quantityBackOrdered;
    /**
     * @var float
     */
    public $quantityBilled;
    /**
     * @var float
     */
    public $quantityCommitted;
    /**
     * @var float
     */
    public $quantityFulfilled;
    /**
     * @var float
     */
    public $quantityPacked;
    /**
     * @var float
     */
    public $quantityPicked;
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
     * @var string
     */
    public $expectedShipDate;
    /**
     * @var boolean
     */
    public $noAutoAssignLocation;
    /**
     * @var boolean
     */
    public $locationAutoAssigned;
    /**
     * @var string
     */
    public $taxDetailsReference;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $chargeType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $orderAllocationStrategy;
    /**
     * @var string
     */
    public $requestedDate;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
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
        "inventoryLocation" => "RecordRef",
        "inventorySubsidiary" => "RecordRef",
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
        "orderAllocationStrategy" => "RecordRef",
        "requestedDate" => "dateTime",
        "customFieldList" => "CustomFieldList",
    );
}
