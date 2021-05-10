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

class CreditMemoItem {
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
    public $orderLine;
    /**
     * @var integer
     */
    public $line;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var string
     */
    public $description;
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
    public $shipAddress;
    /**
     * @var \NetSuite\Classes\ShippingCarrier
     */
    public $shipCarrier;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shipMethod;
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
     * @var float
     */
    public $tax1Amt;
    /**
     * @var float
     */
    public $grossAmt;
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
     * @var boolean
     */
    public $deferRevRec;
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
    public $catchUpPeriod;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $chargeType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subscriptionLine;
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
