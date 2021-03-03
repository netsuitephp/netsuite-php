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
 * generated:  2020-12-11 06:57:10 PM PST
 */

namespace NetSuite\Classes;

class ExpenseReportExpense {
    /**
     * @var integer
     */
    public $line;
    /**
     * @var string
     */
    public $expenseDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $category;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var float
     */
    public $rate;
    /**
     * @var float
     */
    public $foreignAmount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxCode;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var float
     */
    public $taxRate1;
    /**
     * @var float
     */
    public $tax1Amt;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var float
     */
    public $grossAmt;
    /**
     * @var float
     */
    public $taxRate2;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customer;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var boolean
     */
    public $isBillable;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $expMediaItem;
    /**
     * @var boolean
     */
    public $isNonReimbursable;
    /**
     * @var boolean
     */
    public $corporateCreditCard;
    /**
     * @var boolean
     */
    public $receipt;
    /**
     * @var integer
     */
    public $refNumber;
    /**
     * @var string
     */
    public $taxDetailsReference;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $expenseAccount;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
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
        "corporateCreditCard" => "boolean",
        "receipt" => "boolean",
        "refNumber" => "integer",
        "taxDetailsReference" => "string",
        "expenseAccount" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );
}
