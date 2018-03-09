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

class ExpenseReportExpense {
    public $line;
    public $expenseDate;
    public $category;
    public $quantity;
    public $rate;
    public $foreignAmount;
    public $currency;
    public $exchangeRate;
    public $amount;
    public $taxCode;
    public $memo;
    public $taxRate1;
    public $tax1Amt;
    public $department;
    public $grossAmt;
    public $taxRate2;
    public $class;
    public $customer;
    public $location;
    public $isBillable;
    public $expMediaItem;
    public $isNonReimbursable;
    public $receipt;
    public $refNumber;
    public $customFieldList;
    static $paramtypesmap = array(
        "line" => "integer",
        "expenseDate" => "dateTime",
        "category" => "RecordRef",
        "quantity" => "float",
        "rate" => "float",
        "foreignAmount" => "float",
        "currency" => "RecordRef",
        "exchangeRate" => "float",
        "amount" => "float",
        "taxCode" => "RecordRef",
        "memo" => "string",
        "taxRate1" => "float",
        "tax1Amt" => "float",
        "department" => "RecordRef",
        "grossAmt" => "float",
        "taxRate2" => "float",
        "class" => "RecordRef",
        "customer" => "RecordRef",
        "location" => "RecordRef",
        "isBillable" => "boolean",
        "expMediaItem" => "RecordRef",
        "isNonReimbursable" => "boolean",
        "receipt" => "boolean",
        "refNumber" => "integer",
        "customFieldList" => "CustomFieldList",
    );
}
