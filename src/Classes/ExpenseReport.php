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

class ExpenseReport extends Record {
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var string
     */
    public $status;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $account;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $expenseReportCurrency;
    /**
     * @var float
     */
    public $expenseReportExchangeRate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var string
     */
    public $taxPointDate;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $acctCorpCardExp;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $postingPeriod;
    /**
     * @var string
     */
    public $tranDate;
    /**
     * @var string
     */
    public $dueDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $approvalStatus;
    /**
     * @var float
     */
    public $total;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $nextApprover;
    /**
     * @var float
     */
    public $advance;
    /**
     * @var float
     */
    public $tax1Amt;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var boolean
     */
    public $complete;
    /**
     * @var boolean
     */
    public $supervisorApproval;
    /**
     * @var boolean
     */
    public $accountingApproval;
    /**
     * @var boolean
     */
    public $useMultiCurrency;
    /**
     * @var float
     */
    public $tax2Amt;
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
     * @var \NetSuite\Classes\ExpenseReportExpenseList
     */
    public $expenseList;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var \NetSuite\Classes\TaxDetailsList
     */
    public $taxDetailsList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $nexus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiaryTaxRegNum;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "status" => "string",
        "customForm" => "RecordRef",
        "account" => "RecordRef",
        "entity" => "RecordRef",
        "expenseReportCurrency" => "RecordRef",
        "expenseReportExchangeRate" => "float",
        "subsidiary" => "RecordRef",
        "taxPointDate" => "dateTime",
        "tranId" => "string",
        "acctCorpCardExp" => "RecordRef",
        "postingPeriod" => "RecordRef",
        "tranDate" => "dateTime",
        "dueDate" => "dateTime",
        "approvalStatus" => "RecordRef",
        "total" => "float",
        "nextApprover" => "RecordRef",
        "advance" => "float",
        "tax1Amt" => "float",
        "amount" => "float",
        "memo" => "string",
        "complete" => "boolean",
        "supervisorApproval" => "boolean",
        "accountingApproval" => "boolean",
        "useMultiCurrency" => "boolean",
        "tax2Amt" => "float",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "expenseList" => "ExpenseReportExpenseList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "taxDetailsList" => "TaxDetailsList",
        "nexus" => "RecordRef",
        "subsidiaryTaxRegNum" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
