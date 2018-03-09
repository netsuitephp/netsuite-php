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

class CustomerRefund extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $status;
    public $transactionNumber;
    public $customer;
    public $customForm;
    public $balance;
    public $arAcct;
    public $currencyName;
    public $exchangeRate;
    public $address;
    public $total;
    public $currency;
    public $tranDate;
    public $voidJournal;
    public $postingPeriod;
    public $memo;
    public $paymentMethod;
    public $account;
    public $toBePrinted;
    public $tranId;
    public $debitCardIssueNo;
    public $creditCardProcessor;
    public $chargeIt;
    public $pnRefNum;
    public $validFrom;
    public $subsidiary;
    public $department;
    public $class;
    public $location;
    public $creditCard;
    public $ccIsPurchaseCardBin;
    public $ccNumber;
    public $ccProcessAsPurchaseCard;
    public $ccExpireDate;
    public $ccName;
    public $ccStreet;
    public $ccZipCode;
    public $ccApproved;
    public $applyList;
    public $depositList;
    public $accountingBookDetailList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "status" => "string",
        "transactionNumber" => "string",
        "customer" => "RecordRef",
        "customForm" => "RecordRef",
        "balance" => "float",
        "arAcct" => "RecordRef",
        "currencyName" => "string",
        "exchangeRate" => "float",
        "address" => "string",
        "total" => "float",
        "currency" => "RecordRef",
        "tranDate" => "dateTime",
        "voidJournal" => "RecordRef",
        "postingPeriod" => "RecordRef",
        "memo" => "string",
        "paymentMethod" => "RecordRef",
        "account" => "RecordRef",
        "toBePrinted" => "boolean",
        "tranId" => "string",
        "debitCardIssueNo" => "string",
        "creditCardProcessor" => "RecordRef",
        "chargeIt" => "boolean",
        "pnRefNum" => "string",
        "validFrom" => "dateTime",
        "subsidiary" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "creditCard" => "RecordRef",
        "ccIsPurchaseCardBin" => "boolean",
        "ccNumber" => "string",
        "ccProcessAsPurchaseCard" => "boolean",
        "ccExpireDate" => "dateTime",
        "ccName" => "string",
        "ccStreet" => "string",
        "ccZipCode" => "string",
        "ccApproved" => "boolean",
        "applyList" => "CustomerRefundApplyList",
        "depositList" => "CustomerRefundDepositList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
