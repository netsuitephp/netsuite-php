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

class VendorPayment extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $customForm;
    public $account;
    public $balance;
    public $apAcct;
    public $entity;
    public $address;
    public $tranDate;
    public $voidJournal;
    public $postingPeriod;
    public $currencyName;
    public $exchangeRate;
    public $toAch;
    public $toBePrinted;
    public $printVoucher;
    public $tranId;
    public $total;
    public $currency;
    public $department;
    public $memo;
    public $subsidiary;
    public $class;
    public $location;
    public $status;
    public $transactionNumber;
    public $applyList;
    public $creditList;
    public $billPay;
    public $accountingBookDetailList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "account" => "RecordRef",
        "balance" => "float",
        "apAcct" => "RecordRef",
        "entity" => "RecordRef",
        "address" => "string",
        "tranDate" => "dateTime",
        "voidJournal" => "RecordRef",
        "postingPeriod" => "RecordRef",
        "currencyName" => "string",
        "exchangeRate" => "float",
        "toAch" => "boolean",
        "toBePrinted" => "boolean",
        "printVoucher" => "boolean",
        "tranId" => "string",
        "total" => "float",
        "currency" => "RecordRef",
        "department" => "RecordRef",
        "memo" => "string",
        "subsidiary" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "status" => "string",
        "transactionNumber" => "string",
        "applyList" => "VendorPaymentApplyList",
        "creditList" => "VendorPaymentCreditList",
        "billPay" => "boolean",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
