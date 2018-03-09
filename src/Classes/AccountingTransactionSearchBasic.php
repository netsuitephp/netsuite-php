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

class AccountingTransactionSearchBasic extends SearchRecordBasic {
    public $account;
    public $accountingBook;
    public $accountType;
    public $altSalesAmount;
    public $altSalesNetAmount;
    public $amount;
    public $bookSpecificTransaction;
    public $catchUpPeriod;
    public $creditAmount;
    public $customGL;
    public $debitAmount;
    public $deferRevRec;
    public $exchangeRate;
    public $grossAmount;
    public $internalId;
    public $internalIdNumber;
    public $multiSubsidiary;
    public $netAmount;
    public $posting;
    public $quantityRevCommitted;
    public $recognizedRevenue;
    public $revCommitStatus;
    public $revenueStatus;
    public $revRecEndDate;
    public $revRecOnRevCommitment;
    public $revRecStartDate;
    public $subsidiary;
    public $tranIsVsoeBundle;
    public $type;
    public $vsoeAllocation;
    static $paramtypesmap = array(
        "account" => "SearchMultiSelectField",
        "accountingBook" => "SearchMultiSelectField",
        "accountType" => "SearchMultiSelectField",
        "altSalesAmount" => "SearchDoubleField",
        "altSalesNetAmount" => "SearchDoubleField",
        "amount" => "SearchDoubleField",
        "bookSpecificTransaction" => "SearchBooleanField",
        "catchUpPeriod" => "SearchMultiSelectField",
        "creditAmount" => "SearchDoubleField",
        "customGL" => "SearchBooleanField",
        "debitAmount" => "SearchDoubleField",
        "deferRevRec" => "SearchBooleanField",
        "exchangeRate" => "SearchDoubleField",
        "grossAmount" => "SearchDoubleField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "multiSubsidiary" => "SearchBooleanField",
        "netAmount" => "SearchDoubleField",
        "posting" => "SearchBooleanField",
        "quantityRevCommitted" => "SearchDoubleField",
        "recognizedRevenue" => "SearchDoubleField",
        "revCommitStatus" => "SearchEnumMultiSelectField",
        "revenueStatus" => "SearchEnumMultiSelectField",
        "revRecEndDate" => "SearchDateField",
        "revRecOnRevCommitment" => "SearchBooleanField",
        "revRecStartDate" => "SearchDateField",
        "subsidiary" => "SearchMultiSelectField",
        "tranIsVsoeBundle" => "SearchBooleanField",
        "type" => "SearchEnumMultiSelectField",
        "vsoeAllocation" => "SearchDoubleField",
    );
}
