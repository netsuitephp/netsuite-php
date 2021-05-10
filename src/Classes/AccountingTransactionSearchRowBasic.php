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

class AccountingTransactionSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $account;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $accountingBook;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $accountType;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $altSalesAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $altSalesNetAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $amount;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $baseCurrency;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $catchUpPeriod;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $creditAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $customGL;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $dateCreated;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $debitAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $deferRevRec;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $exchangeRate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $fxAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $grossAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $multiSubsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $netAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $posting;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityRevCommitted;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $recognizedRevenue;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $revCommitStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $revenueStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $revRecEndDate;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $revRecOnRevCommitment;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $revRecStartDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $tranIsVsoeBundle;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
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
