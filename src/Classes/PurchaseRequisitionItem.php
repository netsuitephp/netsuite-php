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

class PurchaseRequisitionItem {
    public $line;
    public $item;
    public $vendorName;
    public $poVendor;
    public $quantity;
    public $units;
    public $serialNumbers;
    public $inventoryDetail;
    public $description;
    public $estimatedRate;
    public $estimatedAmount;
    public $rate;
    public $amount;
    public $taxCode;
    public $taxRate1;
    public $taxRate2;
    public $grossAmt;
    public $options;
    public $department;
    public $class;
    public $customer;
    public $isBillable;
    public $linkedOrderList;
    public $linkedOrderStatus;
    public $expectedReceiptDate;
    public $isClosed;
    public $expandItemGroup;
    static $paramtypesmap = array(
        "line" => "integer",
        "item" => "RecordRef",
        "vendorName" => "string",
        "poVendor" => "RecordRef",
        "quantity" => "float",
        "units" => "RecordRef",
        "serialNumbers" => "string",
        "inventoryDetail" => "InventoryDetail",
        "description" => "string",
        "estimatedRate" => "float",
        "estimatedAmount" => "float",
        "rate" => "string",
        "amount" => "float",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "grossAmt" => "float",
        "options" => "CustomFieldList",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "customer" => "RecordRef",
        "isBillable" => "boolean",
        "linkedOrderList" => "RecordRefList",
        "linkedOrderStatus" => "string",
        "expectedReceiptDate" => "dateTime",
        "isClosed" => "boolean",
        "expandItemGroup" => "boolean",
    );
}
