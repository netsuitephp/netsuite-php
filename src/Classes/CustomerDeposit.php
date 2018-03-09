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

class CustomerDeposit extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $status;
    public $customer;
    public $salesOrder;
    public $customForm;
    public $payment;
    public $currency;
    public $tranDate;
    public $postingPeriod;
    public $paymentMethod;
    public $ccIsPurchaseCardBin;
    public $memo;
    public $ccProcessAsPurchaseCard;
    public $currencyName;
    public $exchangeRate;
    public $checkNum;
    public $creditCardProcessor;
    public $creditCard;
    public $ccSecurityCode;
    public $ccNumber;
    public $subsidiary;
    public $department;
    public $class;
    public $location;
    public $ccExpireDate;
    public $debitCardIssueNo;
    public $validFrom;
    public $ccName;
    public $ccStreet;
    public $ccZipCode;
    public $chargeIt;
    public $ccApproved;
    public $pnRefNum;
    public $authCode;
    public $ccAvsStreetMatch;
    public $softDescriptor;
    public $ccAvsZipMatch;
    public $isRecurringPayment;
    public $ccSecurityCodeMatch;
    public $threeDStatusCode;
    public $ignoreAvs;
    public $account;
    public $undepFunds;
    public $tranId;
    public $applyList;
    public $accountingBookDetailList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "status" => "string",
        "customer" => "RecordRef",
        "salesOrder" => "RecordRef",
        "customForm" => "RecordRef",
        "payment" => "float",
        "currency" => "RecordRef",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "paymentMethod" => "RecordRef",
        "ccIsPurchaseCardBin" => "boolean",
        "memo" => "string",
        "ccProcessAsPurchaseCard" => "boolean",
        "currencyName" => "string",
        "exchangeRate" => "float",
        "checkNum" => "string",
        "creditCardProcessor" => "RecordRef",
        "creditCard" => "RecordRef",
        "ccSecurityCode" => "string",
        "ccNumber" => "string",
        "subsidiary" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "ccExpireDate" => "dateTime",
        "debitCardIssueNo" => "string",
        "validFrom" => "dateTime",
        "ccName" => "string",
        "ccStreet" => "string",
        "ccZipCode" => "string",
        "chargeIt" => "boolean",
        "ccApproved" => "boolean",
        "pnRefNum" => "string",
        "authCode" => "string",
        "ccAvsStreetMatch" => "AvsMatchCode",
        "softDescriptor" => "string",
        "ccAvsZipMatch" => "AvsMatchCode",
        "isRecurringPayment" => "boolean",
        "ccSecurityCodeMatch" => "AvsMatchCode",
        "threeDStatusCode" => "string",
        "ignoreAvs" => "boolean",
        "account" => "RecordRef",
        "undepFunds" => "boolean",
        "tranId" => "string",
        "applyList" => "CustomerDepositApplyList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
