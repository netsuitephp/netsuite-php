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

class InterCompanyJournalEntryLine {
    public $lineSubsidiary;
    public $account;
    public $line;
    public $debit;
    public $credit;
    public $taxCode;
    public $memo;
    public $taxRate1;
    public $entity;
    public $grossAmt;
    public $schedule;
    public $department;
    public $startDate;
    public $class;
    public $endDate;
    public $location;
    public $revenueRecognitionRule;
    public $eliminate;
    public $residual;
    public $amortizationSched;
    public $scheduleNum;
    public $amortizStartDate;
    public $amortizationEndDate;
    public $amortizationResidual;
    public $tax1Amt;
    public $tax1Acct;
    public $customFieldList;
    static $paramtypesmap = array(
        "lineSubsidiary" => "RecordRef",
        "account" => "RecordRef",
        "line" => "integer",
        "debit" => "float",
        "credit" => "float",
        "taxCode" => "RecordRef",
        "memo" => "string",
        "taxRate1" => "float",
        "entity" => "RecordRef",
        "grossAmt" => "float",
        "schedule" => "RecordRef",
        "department" => "RecordRef",
        "startDate" => "dateTime",
        "class" => "RecordRef",
        "endDate" => "dateTime",
        "location" => "RecordRef",
        "revenueRecognitionRule" => "RecordRef",
        "eliminate" => "boolean",
        "residual" => "string",
        "amortizationSched" => "RecordRef",
        "scheduleNum" => "RecordRef",
        "amortizStartDate" => "dateTime",
        "amortizationEndDate" => "dateTime",
        "amortizationResidual" => "string",
        "tax1Amt" => "float",
        "tax1Acct" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );
}
