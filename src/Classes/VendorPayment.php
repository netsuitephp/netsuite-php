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

class VendorPayment extends Record {
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $account;
    /**
     * @var float
     */
    public $balance;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $apAcct;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entity;
    /**
     * @var string
     */
    public $tranDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $voidJournal;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $postingPeriod;
    /**
     * @var string
     */
    public $currencyName;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var boolean
     */
    public $toAch;
    /**
     * @var boolean
     */
    public $toBePrinted;
    /**
     * @var boolean
     */
    public $printVoucher;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var float
     */
    public $total;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $transactionNumber;
    /**
     * @var \NetSuite\Classes\VendorPaymentApplyList
     */
    public $applyList;
    /**
     * @var \NetSuite\Classes\VendorPaymentCreditList
     */
    public $creditList;
    /**
     * @var boolean
     */
    public $billPay;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var float
     */
    public $availableBalance;
    /**
     * @var boolean
     */
    public $isInTransitPayment;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $approvalStatus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $nextApprover;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $payeeAddressList;
    /**
     * @var \NetSuite\Classes\Address
     */
    public $payeeAddress;
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
        "customForm" => "RecordRef",
        "account" => "RecordRef",
        "balance" => "float",
        "apAcct" => "RecordRef",
        "entity" => "RecordRef",
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
        "availableBalance" => "float",
        "isInTransitPayment" => "boolean",
        "approvalStatus" => "RecordRef",
        "nextApprover" => "RecordRef",
        "payeeAddressList" => "RecordRef",
        "payeeAddress" => "Address",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
