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

class CustomerDeposit extends Record {
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var string
     */
    public $status;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customer;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesOrder;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var float
     */
    public $payment;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var string
     */
    public $tranDate;
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
    public $currencyName;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var string
     */
    public $checkNum;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $creditCardProcessor;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $creditCard;
    /**
     * @var string
     */
    public $ccSecurityCode;
    /**
     * @var string
     */
    public $ccNumber;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
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
     * @var \NetSuite\Classes\CustomerDepositHandlingMode
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
     * @var \NetSuite\Classes\CustomerDepositPaymentOperation
     */
    public $paymentOperation;
    /**
     * @var string
     */
    public $dynamicDescriptor;
    /**
     * @var string
     */
    public $ccExpireDate;
    /**
     * @var string
     */
    public $debitCardIssueNo;
    /**
     * @var string
     */
    public $validFrom;
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
    public $chargeIt;
    /**
     * @var boolean
     */
    public $ccApproved;
    /**
     * @var string
     */
    public $pnRefNum;
    /**
     * @var string
     */
    public $authCode;
    /**
     * @var \NetSuite\Classes\AvsMatchCode
     */
    public $ccAvsStreetMatch;
    /**
     * @var string
     */
    public $softDescriptor;
    /**
     * @var \NetSuite\Classes\AvsMatchCode
     */
    public $ccAvsZipMatch;
    /**
     * @var boolean
     */
    public $isRecurringPayment;
    /**
     * @var \NetSuite\Classes\AvsMatchCode
     */
    public $ccSecurityCodeMatch;
    /**
     * @var string
     */
    public $threeDStatusCode;
    /**
     * @var boolean
     */
    public $ignoreAvs;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $account;
    /**
     * @var boolean
     */
    public $undepFunds;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var \NetSuite\Classes\CustomerDepositApplyList
     */
    public $applyList;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var float
     */
    public $salesOrderRequiredDepositDue;
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
        "paymentOption" => "RecordRef",
        "inputAuthCode" => "string",
        "inputReferenceCode" => "string",
        "checkNumber" => "string",
        "paymentCardCsc" => "string",
        "paymentProcessingProfile" => "RecordRef",
        "handlingMode" => "CustomerDepositHandlingMode",
        "outputAuthCode" => "string",
        "outputReferenceCode" => "string",
        "paymentOperation" => "CustomerDepositPaymentOperation",
        "dynamicDescriptor" => "string",
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
        "salesOrderRequiredDepositDue" => "float",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
