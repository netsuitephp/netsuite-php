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

class CustomerPayment extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $customForm;
    public $arAcct;
    public $customer;
    public $balance;
    public $pending;
    public $currency;
    public $payment;
    public $autoApply;
    public $tranDate;
    public $tranId;
    public $postingPeriod;
    public $paymentMethod;
    public $ccIsPurchaseCardBin;
    public $memo;
    public $ccProcessAsPurchaseCard;
    public $checkNum;
    public $currencyName;
    public $exchangeRate;
    public $creditCard;
    public $chargeIt;
    public $ccNumber;
    public $ccExpireDate;
    public $ccName;
    public $ccStreet;
    public $ccZipCode;
    public $ccApproved;
    public $authCode;
    public $ccAvsStreetMatch;
    public $ccAvsZipMatch;
    public $isRecurringPayment;
    public $ccSecurityCode;
    public $ignoreAvs;
    public $ccSecurityCodeMatch;
    public $threeDStatusCode;
    public $pnRefNum;
    public $creditCardProcessor;
    public $debitCardIssueNo;
    public $validFrom;
    public $undepFunds;
    public $account;
    public $total;
    public $subsidiary;
    public $applied;
    public $unapplied;
    public $class;
    public $department;
    public $location;
    public $status;
    public $applyList;
    public $creditList;
    public $depositList;
    public $accountingBookDetailList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "arAcct" => "RecordRef",
        "customer" => "RecordRef",
        "balance" => "float",
        "pending" => "float",
        "currency" => "RecordRef",
        "payment" => "float",
        "autoApply" => "boolean",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "postingPeriod" => "RecordRef",
        "paymentMethod" => "RecordRef",
        "ccIsPurchaseCardBin" => "boolean",
        "memo" => "string",
        "ccProcessAsPurchaseCard" => "boolean",
        "checkNum" => "string",
        "currencyName" => "string",
        "exchangeRate" => "float",
        "creditCard" => "RecordRef",
        "chargeIt" => "boolean",
        "ccNumber" => "string",
        "ccExpireDate" => "dateTime",
        "ccName" => "string",
        "ccStreet" => "string",
        "ccZipCode" => "string",
        "ccApproved" => "boolean",
        "authCode" => "string",
        "ccAvsStreetMatch" => "AvsMatchCode",
        "ccAvsZipMatch" => "AvsMatchCode",
        "isRecurringPayment" => "boolean",
        "ccSecurityCode" => "string",
        "ignoreAvs" => "boolean",
        "ccSecurityCodeMatch" => "AvsMatchCode",
        "threeDStatusCode" => "string",
        "pnRefNum" => "string",
        "creditCardProcessor" => "RecordRef",
        "debitCardIssueNo" => "string",
        "validFrom" => "dateTime",
        "undepFunds" => "boolean",
        "account" => "RecordRef",
        "total" => "float",
        "subsidiary" => "RecordRef",
        "applied" => "float",
        "unapplied" => "float",
        "class" => "RecordRef",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "status" => "string",
        "applyList" => "CustomerPaymentApplyList",
        "creditList" => "CustomerPaymentCreditList",
        "depositList" => "CustomerPaymentDepositList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
