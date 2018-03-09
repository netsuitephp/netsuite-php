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

class ExpenseReport extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $status;
    public $customForm;
    public $account;
    public $entity;
    public $subsidiary;
    public $tranId;
    public $postingPeriod;
    public $tranDate;
    public $dueDate;
    public $approvalStatus;
    public $total;
    public $nextApprover;
    public $advance;
    public $tax1Amt;
    public $amount;
    public $memo;
    public $complete;
    public $supervisorApproval;
    public $accountingApproval;
    public $useMultiCurrency;
    public $tax2Amt;
    public $department;
    public $class;
    public $location;
    public $expenseList;
    public $accountingBookDetailList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "status" => "string",
        "customForm" => "RecordRef",
        "account" => "RecordRef",
        "entity" => "RecordRef",
        "subsidiary" => "RecordRef",
        "tranId" => "string",
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
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
