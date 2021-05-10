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

class CustomerPayment extends Record {
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
    public $arAcct;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customer;
    /**
     * @var float
     */
    public $balance;
    /**
     * @var float
     */
    public $pending;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $payment;
    /**
     * @var boolean
     */
    public $autoApply;
    /**
     * @var string
     */
    public $tranDate;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $postingPeriod;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $paymentMethod;
    /**
     * @var boolean
     */
    public $ccIsPurchaseCardBin;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var boolean
     */
    public $ccProcessAsPurchaseCard;
    /**
     * @var string
     */
    public $checkNum;
    /**
     * @var string
     */
    public $currencyName;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $creditCard;
    /**
     * @var boolean
     */
    public $chargeIt;
    /**
     * @var string
     */
    public $ccNumber;
    /**
     * @var string
     */
    public $ccExpireDate;
    /**
     * @var string
     */
    public $ccName;
    /**
     * @var string
     */
    public $ccStreet;
    /**
     * @var string
     */
    public $ccZipCode;
    /**
     * @var boolean
     */
    public $ccApproved;
    /**
     * @var string
     */
    public $authCode;
    /**
     * @var \NetSuite\Classes\AvsMatchCode
     */
    public $ccAvsStreetMatch;
    /**
     * @var \NetSuite\Classes\AvsMatchCode
     */
    public $ccAvsZipMatch;
    /**
     * @var boolean
     */
    public $isRecurringPayment;
    /**
     * @var string
     */
    public $ccSecurityCode;
    /**
     * @var boolean
     */
    public $ignoreAvs;
    /**
     * @var \NetSuite\Classes\AvsMatchCode
     */
    public $ccSecurityCodeMatch;
    /**
     * @var string
     */
    public $threeDStatusCode;
    /**
     * @var string
     */
    public $pnRefNum;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $creditCardProcessor;
    /**
     * @var string
     */
    public $debitCardIssueNo;
    /**
     * @var string
     */
    public $validFrom;
    /**
     * @var boolean
     */
    public $undepFunds;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $account;
    /**
     * @var float
     */
    public $total;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var float
     */
    public $applied;
    /**
     * @var float
     */
    public $unapplied;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $paymentOption;
    /**
     * @var string
     */
    public $inputAuthCode;
    /**
     * @var string
     */
    public $inputReferenceCode;
    /**
     * @var string
     */
    public $checkNumber;
    /**
     * @var string
     */
    public $paymentCardCsc;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $paymentProcessingProfile;
    /**
     * @var \NetSuite\Classes\CustomerPaymentHandlingMode
     */
    public $handlingMode;
    /**
     * @var string
     */
    public $outputAuthCode;
    /**
     * @var string
     */
    public $outputReferenceCode;
    /**
     * @var \NetSuite\Classes\CustomerPaymentPaymentOperation
     */
    public $paymentOperation;
    /**
     * @var string
     */
    public $dynamicDescriptor;
    /**
     * @var string
     */
    public $status;
    /**
     * @var \NetSuite\Classes\CustomerPaymentApplyList
     */
    public $applyList;
    /**
     * @var \NetSuite\Classes\CustomerPaymentCreditList
     */
    public $creditList;
    /**
     * @var \NetSuite\Classes\CustomerPaymentDepositList
     */
    public $depositList;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
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
        "paymentOption" => "RecordRef",
        "inputAuthCode" => "string",
        "inputReferenceCode" => "string",
        "checkNumber" => "string",
        "paymentCardCsc" => "string",
        "paymentProcessingProfile" => "RecordRef",
        "handlingMode" => "CustomerPaymentHandlingMode",
        "outputAuthCode" => "string",
        "outputReferenceCode" => "string",
        "paymentOperation" => "CustomerPaymentPaymentOperation",
        "dynamicDescriptor" => "string",
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
