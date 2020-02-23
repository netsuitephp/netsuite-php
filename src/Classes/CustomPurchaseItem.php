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

class CustomPurchaseItem {
    public $item;
    public $vendorName;
    public $line;
    public $quantity;
    public $units;
    public $inventoryDetail;
    public $description;
    public $serialNumbers;
    public $binNumbers;
    public $grossAmt;
    public $rate;
    public $amount;
    public $options;
    public $department;
    public $class;
    public $location;
    public $customer;
    public $isBillable;
    public $billVarianceStatus;
    public $amortizationSched;
    public $amortizStartDate;
    public $amortizationEndDate;
    public $amortizationResidual;
    public $taxAmount;
    public $taxDetailsReference;
    public $customFieldList;
    static $paramtypesmap = array(
        "item" => "RecordRef",
        "vendorName" => "string",
        "line" => "integer",
        "quantity" => "float",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "description" => "string",
        "serialNumbers" => "string",
        "binNumbers" => "string",
        "grossAmt" => "float",
        "rate" => "string",
        "amount" => "float",
        "options" => "CustomFieldList",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "customer" => "RecordRef",
        "isBillable" => "boolean",
        "billVarianceStatus" => "TransactionBillVarianceStatus",
        "amortizationSched" => "RecordRef",
        "amortizStartDate" => "dateTime",
        "amortizationEndDate" => "dateTime",
        "amortizationResidual" => "string",
        "taxAmount" => "float",
        "taxDetailsReference" => "string",
        "customFieldList" => "CustomFieldList",
    );
}
