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

class JournalEntryLine {
    public $account;
    public $line;
    public $debit;
    public $credit;
    public $taxAccount;
    public $lineTaxCode;
    public $lineTaxRate;
    public $debitTax;
    public $creditTax;
    public $taxBasis;
    public $totalAmount;
    public $taxCode;
    public $memo;
    public $taxRate1;
    public $entity;
    public $grossAmt;
    public $department;
    public $class;
    public $location;
    public $revenueRecognitionRule;
    public $eliminate;
    public $schedule;
    public $startDate;
    public $endDate;
    public $residual;
    public $scheduleNum;
    public $tax1Amt;
    public $tax1Acct;
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
