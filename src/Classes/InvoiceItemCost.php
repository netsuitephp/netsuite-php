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

class InvoiceItemCost {
    public $apply;
    public $doc;
    public $line;
    public $taxDetailsReference;
    public $billedDate;
    public $itemDisp;
    public $memo;
    public $jobDisp;
    public $department;
    public $class;
    public $location;
    public $unitDisp;
    public $options;
    public $itemCostCount;
    public $quantity;
    public $serialNumbers;
    public $cost;
    public $amount;
    public $taxAmount;
    public $revRecSchedule;
    public $revRecStartDate;
    public $revRecEndDate;
    public $grossAmt;
    public $tax1Amt;
    public $taxCode;
    public $taxRate1;
    public $taxRate2;
    static $paramtypesmap = array(
        "apply" => "boolean",
        "doc" => "integer",
        "line" => "integer",
        "taxDetailsReference" => "string",
        "billedDate" => "dateTime",
        "itemDisp" => "string",
        "memo" => "string",
        "jobDisp" => "string",
        "department" => "string",
        "class" => "string",
        "location" => "string",
        "unitDisp" => "string",
        "options" => "CustomFieldList",
        "itemCostCount" => "string",
        "quantity" => "string",
        "serialNumbers" => "string",
        "cost" => "float",
        "amount" => "float",
        "taxAmount" => "float",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "grossAmt" => "float",
        "tax1Amt" => "float",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
    );
}
