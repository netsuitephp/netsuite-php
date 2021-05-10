<?php
/**
 * This file is part of the netsuitephp/netsuite-php library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/netsuitephp/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/netsuitephp/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 */

namespace NetSuite\Classes;

class JournalEntryLine {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $account;
    /**
     * @var integer
     */
    public $line;
    /**
     * @var float
     */
    public $debit;
    /**
     * @var float
     */
    public $credit;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $lineTaxCode;
    /**
     * @var float
     */
    public $lineTaxRate;
    /**
     * @var float
     */
    public $debitTax;
    /**
     * @var float
     */
    public $creditTax;
    /**
     * @var float
     */
    public $taxBasis;
    /**
     * @var float
     */
    public $totalAmount;
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $entity;
    /**
     * @var float
     */
    public $grossAmt;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $revenueRecognitionRule;
    /**
     * @var boolean
     */
    public $eliminate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $schedule;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var string
     */
    public $residual;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $scheduleNum;
    /**
     * @var float
     */
    public $tax1Amt;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $tax1Acct;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "account" => "RecordRef",
        "line" => "integer",
        "debit" => "float",
        "credit" => "float",
        "taxAccount" => "RecordRef",
        "lineTaxCode" => "RecordRef",
        "lineTaxRate" => "float",
        "debitTax" => "float",
        "creditTax" => "float",
        "taxBasis" => "float",
        "totalAmount" => "float",
        "taxCode" => "RecordRef",
        "memo" => "string",
        "taxRate1" => "float",
        "entity" => "RecordRef",
        "grossAmt" => "float",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "revenueRecognitionRule" => "RecordRef",
        "eliminate" => "boolean",
        "schedule" => "RecordRef",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "residual" => "string",
        "scheduleNum" => "RecordRef",
        "tax1Amt" => "float",
        "tax1Acct" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );
}
