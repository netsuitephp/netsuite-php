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

class CheckItem {
    public $item;
    public $vendorName;
    public $line;
    public $quantity;
    public $units;
    public $inventoryDetail;
    public $description;
    public $binNumbers;
    public $serialNumbers;
    public $expirationDate;
    public $rate;
    public $taxCode;
    public $amount;
    public $options;
    public $taxRate1;
    public $taxRate2;
    public $department;
    public $grossAmt;
    public $class;
    public $tax1Amt;
    public $location;
    public $customer;
    public $isBillable;
    public $landedCost;
    public $customFieldList;
    static $paramtypesmap = array(
        "item" => "RecordRef",
        "vendorName" => "string",
        "line" => "integer",
        "quantity" => "float",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "description" => "string",
        "binNumbers" => "string",
        "serialNumbers" => "string",
        "expirationDate" => "dateTime",
        "rate" => "string",
        "taxCode" => "RecordRef",
        "amount" => "float",
        "options" => "CustomFieldList",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "department" => "RecordRef",
        "grossAmt" => "float",
        "class" => "RecordRef",
        "tax1Amt" => "float",
        "location" => "RecordRef",
        "customer" => "RecordRef",
        "isBillable" => "boolean",
        "landedCost" => "LandedCost",
        "customFieldList" => "CustomFieldList",
    );
}
