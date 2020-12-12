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

class InterCompanyJournalEntryLine {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $lineSubsidiary;
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
    public $schedule;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var string
     */
    public $endDate;
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
     * @var string
     */
    public $residual;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $amortizationSched;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $scheduleNum;
    /**
     * @var string
     */
    public $amortizStartDate;
    /**
     * @var string
     */
    public $amortizationEndDate;
    /**
     * @var string
     */
    public $amortizationResidual;
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
