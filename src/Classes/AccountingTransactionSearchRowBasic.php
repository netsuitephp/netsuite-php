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

class AccountingTransactionSearchRowBasic extends SearchRowBasic {
    public $account;
    public $accountingBook;
    public $accountType;
    public $altSalesAmount;
    public $altSalesNetAmount;
    public $amount;
    public $baseCurrency;
    public $catchUpPeriod;
    public $creditAmount;
    public $customGL;
    public $dateCreated;
    public $debitAmount;
    public $deferRevRec;
    public $exchangeRate;
    public $fxAmount;
    public $grossAmount;
    public $internalId;
    public $lastModifiedDate;
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
    public $vsoeAllocation;
    static $paramtypesmap = array(
        "account" => "SearchColumnSelectField[]",
        "accountingBook" => "SearchColumnSelectField[]",
        "accountType" => "SearchColumnStringField[]",
        "altSalesAmount" => "SearchColumnDoubleField[]",
        "altSalesNetAmount" => "SearchColumnDoubleField[]",
        "amount" => "SearchColumnDoubleField[]",
        "baseCurrency" => "SearchColumnStringField[]",
        "catchUpPeriod" => "SearchColumnStringField[]",
        "creditAmount" => "SearchColumnDoubleField[]",
        "customGL" => "SearchColumnBooleanField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "debitAmount" => "SearchColumnDoubleField[]",
        "deferRevRec" => "SearchColumnBooleanField[]",
        "exchangeRate" => "SearchColumnDoubleField[]",
        "fxAmount" => "SearchColumnDoubleField[]",
        "grossAmount" => "SearchColumnDoubleField[]",
        "internalId" => "SearchColumnSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "multiSubsidiary" => "SearchColumnBooleanField[]",
        "netAmount" => "SearchColumnDoubleField[]",
        "posting" => "SearchColumnBooleanField[]",
        "quantityRevCommitted" => "SearchColumnDoubleField[]",
        "recognizedRevenue" => "SearchColumnDoubleField[]",
        "revCommitStatus" => "SearchColumnEnumSelectField[]",
        "revenueStatus" => "SearchColumnEnumSelectField[]",
        "revRecEndDate" => "SearchColumnDateField[]",
        "revRecOnRevCommitment" => "SearchColumnBooleanField[]",
        "revRecStartDate" => "SearchColumnDateField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "tranIsVsoeBundle" => "SearchColumnBooleanField[]",
        "vsoeAllocation" => "SearchColumnDoubleField[]",
    );
}
