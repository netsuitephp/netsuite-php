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

class AccountingTransactionSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $account;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $accountingBook;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $accountType;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $altSalesAmount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $altSalesNetAmount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $amount;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $bookSpecificTransaction;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $catchUpPeriod;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $creditAmount;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $customGL;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $debitAmount;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $deferRevRec;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $exchangeRate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $grossAmount;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $multiSubsidiary;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $netAmount;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $posting;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantityRevCommitted;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $recognizedRevenue;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $revCommitStatus;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $revenueStatus;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $revRecEndDate;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $revRecOnRevCommitment;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $revRecStartDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $tranIsVsoeBundle;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $type;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
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
