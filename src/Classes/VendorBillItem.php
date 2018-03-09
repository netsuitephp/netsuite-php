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

class VendorBillItem {
    public $item;
    public $vendorName;
    public $line;
    public $orderDoc;
    public $orderLine;
    public $quantity;
    public $units;
    public $inventoryDetail;
    public $description;
    public $serialNumbers;
    public $binNumbers;
    public $expirationDate;
    public $taxCode;
    public $taxRate1;
    public $taxRate2;
    public $grossAmt;
    public $tax1Amt;
    public $rate;
    public $amount;
    public $options;
    public $department;
    public $class;
    public $location;
    public $customer;
    public $landedCostCategory;
    public $isBillable;
    public $billVarianceStatus;
    public $billreceiptsList;
    public $amortizationSched;
    public $amortizStartDate;
    public $amortizationEndDate;
    public $amortizationResidual;
    public $taxAmount;
    public $taxDetailsReference;
    public $landedCost;
    public $customFieldList;
    static $paramtypesmap = array(
        "item" => "RecordRef",
        "vendorName" => "string",
        "line" => "integer",
        "orderDoc" => "integer",
        "orderLine" => "integer",
        "quantity" => "float",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "description" => "string",
        "serialNumbers" => "string",
        "binNumbers" => "string",
        "expirationDate" => "dateTime",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "grossAmt" => "float",
        "tax1Amt" => "float",
        "rate" => "string",
        "amount" => "float",
        "options" => "CustomFieldList",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "customer" => "RecordRef",
        "landedCostCategory" => "RecordRef",
        "isBillable" => "boolean",
        "billVarianceStatus" => "TransactionBillVarianceStatus",
        "billreceiptsList" => "RecordRefList",
        "amortizationSched" => "RecordRef",
        "amortizStartDate" => "dateTime",
        "amortizationEndDate" => "dateTime",
        "amortizationResidual" => "string",
        "taxAmount" => "float",
        "taxDetailsReference" => "string",
        "landedCost" => "LandedCost",
        "customFieldList" => "CustomFieldList",
    );
}
