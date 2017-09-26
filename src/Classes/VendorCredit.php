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

class VendorCredit extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $nexus;
    public $subsidiaryTaxRegNum;
    public $taxRegOverride;
    public $taxDetailsOverride;
    public $customForm;
    public $account;
    public $unApplied;
    public $billAddressList;
    public $autoApply;
    public $applied;
    public $transactionNumber;
    public $tranId;
    public $createdFrom;
    public $entity;
    public $total;
    public $userTotal;
    public $currency;
    public $currencyName;
    public $billingAddress;
    public $tranDate;
    public $exchangeRate;
    public $entityTaxRegNum;
    public $userTaxTotal;
    public $postingPeriod;
    public $memo;
    public $department;
    public $class;
    public $location;
    public $subsidiary;
    public $expenseList;
    public $itemList;
    public $accountingBookDetailList;
    public $applyList;
    public $taxDetailsList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "nexus" => "RecordRef",
        "subsidiaryTaxRegNum" => "RecordRef",
        "taxRegOverride" => "boolean",
        "taxDetailsOverride" => "boolean",
        "customForm" => "RecordRef",
        "account" => "RecordRef",
        "unApplied" => "float",
        "billAddressList" => "RecordRef",
        "autoApply" => "boolean",
        "applied" => "float",
        "transactionNumber" => "string",
        "tranId" => "string",
        "createdFrom" => "RecordRef",
        "entity" => "RecordRef",
        "total" => "float",
        "userTotal" => "float",
        "currency" => "RecordRef",
        "currencyName" => "string",
        "billingAddress" => "Address",
        "tranDate" => "dateTime",
        "exchangeRate" => "float",
        "entityTaxRegNum" => "RecordRef",
        "userTaxTotal" => "float",
        "postingPeriod" => "RecordRef",
        "memo" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "expenseList" => "VendorCreditExpenseList",
        "itemList" => "VendorCreditItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "applyList" => "VendorCreditApplyList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
