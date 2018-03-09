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

class CheckExpense {
    public $line;
    public $category;
    public $account;
    public $amount;
    public $memo;
    public $department;
    public $class;
    public $location;
    public $customer;
    public $isBillable;
    public $taxCode;
    public $taxRate1;
    public $tax1Amt;
    public $taxRate2;
    public $grossAmt;
    public $customFieldList;
    static $paramtypesmap = array(
        "line" => "integer",
        "category" => "RecordRef",
        "account" => "RecordRef",
        "amount" => "float",
        "memo" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "customer" => "RecordRef",
        "isBillable" => "boolean",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "tax1Amt" => "float",
        "taxRate2" => "float",
        "grossAmt" => "float",
        "customFieldList" => "CustomFieldList",
    );
}
