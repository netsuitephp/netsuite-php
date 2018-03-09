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

class VendorReturnAuthorizationItem {
    public $item;
    public $vendorName;
    public $line;
    public $orderLine;
    public $quantity;
    public $units;
    public $inventoryDetail;
    public $serialNumbersList;
    public $description;
    public $binNumbers;
    public $rate;
    public $amount;
    public $taxCode;
    public $taxRate1;
    public $taxRate2;
    public $grossAmt;
    public $tax1Amt;
    public $options;
    public $department;
    public $class;
    public $location;
    public $customer;
    public $isBillable;
    public $isClosed;
    public $amortizationSched;
    public $isDropShipment;
    public $taxAmount;
    public $taxDetailsReference;
    public $amortizStartDate;
    public $amortizationEndDate;
    public $amortizationResidual;
    public $customFieldList;
    static $paramtypesmap = array(
        "item" => "RecordRef",
        "vendorName" => "string",
        "line" => "integer",
        "orderLine" => "integer",
        "quantity" => "float",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "serialNumbersList" => "RecordRefList",
        "description" => "string",
        "binNumbers" => "string",
        "rate" => "string",
        "amount" => "float",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "grossAmt" => "float",
        "tax1Amt" => "float",
        "options" => "CustomFieldList",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "customer" => "RecordRef",
        "isBillable" => "boolean",
        "isClosed" => "boolean",
        "amortizationSched" => "RecordRef",
        "isDropShipment" => "boolean",
        "taxAmount" => "float",
        "taxDetailsReference" => "string",
        "amortizStartDate" => "dateTime",
        "amortizationEndDate" => "dateTime",
        "amortizationResidual" => "string",
        "customFieldList" => "CustomFieldList",
    );
}
