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

class PurchaseOrderItem {
    public $item;
    public $line;
    public $quantityOnShipments;
    public $vendorName;
    public $quantityReceived;
    public $quantityBilled;
    public $quantityAvailable;
    public $quantityOnHand;
    public $taxCode;
    public $taxRate1;
    public $taxRate2;
    public $quantity;
    public $tax1Amt;
    public $grossAmt;
    public $units;
    public $inventoryDetail;
    public $serialNumbers;
    public $description;
    public $purchaseContract;
    public $rate;
    public $amount;
    public $options;
    public $taxAmount;
    public $department;
    public $class;
    public $location;
    public $landedCostCategory;
    public $customer;
    public $isBillable;
    public $billVarianceStatus;
    public $matchBillToReceipt;
    public $expectedReceiptDate;
    public $isClosed;
    public $taxDetailsReference;
    public $createdFrom;
    public $linkedOrderList;
    public $customFieldList;
    static $paramtypesmap = array(
        "item" => "RecordRef",
        "line" => "integer",
        "quantityOnShipments" => "float",
        "vendorName" => "string",
        "quantityReceived" => "float",
        "quantityBilled" => "float",
        "quantityAvailable" => "float",
        "quantityOnHand" => "float",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "quantity" => "float",
        "tax1Amt" => "float",
        "grossAmt" => "float",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "serialNumbers" => "string",
        "description" => "string",
        "purchaseContract" => "RecordRef",
        "rate" => "string",
        "amount" => "float",
        "options" => "CustomFieldList",
        "taxAmount" => "float",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "landedCostCategory" => "RecordRef",
        "customer" => "RecordRef",
        "isBillable" => "boolean",
        "billVarianceStatus" => "TransactionBillVarianceStatus",
        "matchBillToReceipt" => "boolean",
        "expectedReceiptDate" => "dateTime",
        "isClosed" => "boolean",
        "taxDetailsReference" => "string",
        "createdFrom" => "RecordRef",
        "linkedOrderList" => "RecordRefList",
        "customFieldList" => "CustomFieldList",
    );
}
