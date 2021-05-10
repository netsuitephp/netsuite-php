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

class Vendor extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $entityId;
    /**
     * @var string
     */
    public $altName;
    /**
     * @var boolean
     */
    public $isPerson;
    /**
     * @var string
     */
    public $phoneticName;
    /**
     * @var string
     */
    public $salutation;
    /**
     * @var string
     */
    public $firstName;
    /**
     * @var string
     */
    public $middleName;
    /**
     * @var string
     */
    public $lastName;
    /**
     * @var string
     */
    public $companyName;
    /**
     * @var string
     */
    public $phone;
    /**
     * @var string
     */
    public $fax;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $url;
    /**
     * @var string
     */
    public $defaultAddress;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var string
     */
    public $dateCreated;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $category;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $printOnCheckAs;
    /**
     * @var string
     */
    public $altPhone;
    /**
     * @var string
     */
    public $homePhone;
    /**
     * @var string
     */
    public $mobilePhone;
    /**
     * @var string
     */
    public $altEmail;
    /**
     * @var string
     */
    public $comments;
    /**
     * @var \NetSuite\Classes\GlobalSubscriptionStatus
     */
    public $globalSubscriptionStatus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $image;
    /**
     * @var \NetSuite\Classes\EmailPreference
     */
    public $emailPreference;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $representingSubsidiary;
    /**
     * @var string
     */
    public $accountNumber;
    /**
     * @var string
     */
    public $legalName;
    /**
     * @var string
     */
    public $vatRegNumber;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $expenseAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $payablesAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $terms;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $incoterm;
    /**
     * @var float
     */
    public $creditLimit;
    /**
     * @var float
     */
    public $balancePrimary;
    /**
     * @var float
     */
    public $openingBalance;
    /**
     * @var string
     */
    public $openingBalanceDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $openingBalanceAccount;
    /**
     * @var float
     */
    public $balance;
    /**
     * @var float
     */
    public $unbilledOrdersPrimary;
    /**
     * @var string
     */
    public $bcn;
    /**
     * @var float
     */
    public $unbilledOrders;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var boolean
     */
    public $is1099Eligible;
    /**
     * @var boolean
     */
    public $isJobResourceVend;
    /**
     * @var float
     */
    public $laborCost;
    /**
     * @var float
     */
    public $purchaseOrderQuantity;
    /**
     * @var float
     */
    public $purchaseOrderAmount;
    /**
     * @var float
     */
    public $purchaseOrderQuantityDiff;
    /**
     * @var float
     */
    public $receiptQuantity;
    /**
     * @var float
     */
    public $receiptAmount;
    /**
     * @var float
     */
    public $receiptQuantityDiff;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $workCalendar;
    /**
     * @var string
     */
    public $taxIdNum;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxItem;
    /**
     * @var boolean
     */
    public $giveAccess;
    /**
     * @var boolean
     */
    public $sendEmail;
    /**
     * @var boolean
     */
    public $billPay;
    /**
     * @var boolean
     */
    public $isAccountant;
    /**
     * @var string
     */
    public $password;
    /**
     * @var string
     */
    public $password2;
    /**
     * @var boolean
     */
    public $requirePwdChange;
    /**
     * @var boolean
     */
    public $eligibleForCommission;
    /**
     * @var boolean
     */
    public $emailTransactions;
    /**
     * @var boolean
     */
    public $printTransactions;
    /**
     * @var boolean
     */
    public $faxTransactions;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $defaultTaxReg;
    /**
     * @var \NetSuite\Classes\VendorPricingScheduleList
     */
    public $pricingScheduleList;
    /**
     * @var \NetSuite\Classes\SubscriptionsList
     */
    public $subscriptionsList;
    /**
     * @var \NetSuite\Classes\VendorAddressbookList
     */
    public $addressbookList;
    /**
     * @var \NetSuite\Classes\VendorCurrencyList
     */
    public $currencyList;
    /**
     * @var \NetSuite\Classes\VendorRolesList
     */
    public $rolesList;
    /**
     * @var \NetSuite\Classes\VendorTaxRegistrationList
     */
    public $taxRegistrationList;
    /**
     * @var integer
     */
    public $predictedDays;
    /**
     * @var float
     */
    public $predConfidence;
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
        "customForm" => "RecordRef",
        "entityId" => "string",
        "altName" => "string",
        "isPerson" => "boolean",
        "phoneticName" => "string",
        "salutation" => "string",
        "firstName" => "string",
        "middleName" => "string",
        "lastName" => "string",
        "companyName" => "string",
        "phone" => "string",
        "fax" => "string",
        "email" => "string",
        "url" => "string",
        "defaultAddress" => "string",
        "isInactive" => "boolean",
        "lastModifiedDate" => "dateTime",
        "dateCreated" => "dateTime",
        "category" => "RecordRef",
        "title" => "string",
        "printOnCheckAs" => "string",
        "altPhone" => "string",
        "homePhone" => "string",
        "mobilePhone" => "string",
        "altEmail" => "string",
        "comments" => "string",
        "globalSubscriptionStatus" => "GlobalSubscriptionStatus",
        "image" => "RecordRef",
        "emailPreference" => "EmailPreference",
        "subsidiary" => "RecordRef",
        "representingSubsidiary" => "RecordRef",
        "accountNumber" => "string",
        "legalName" => "string",
        "vatRegNumber" => "string",
        "expenseAccount" => "RecordRef",
        "payablesAccount" => "RecordRef",
        "terms" => "RecordRef",
        "incoterm" => "RecordRef",
        "creditLimit" => "float",
        "balancePrimary" => "float",
        "openingBalance" => "float",
        "openingBalanceDate" => "dateTime",
        "openingBalanceAccount" => "RecordRef",
        "balance" => "float",
        "unbilledOrdersPrimary" => "float",
        "bcn" => "string",
        "unbilledOrders" => "float",
        "currency" => "RecordRef",
        "is1099Eligible" => "boolean",
        "isJobResourceVend" => "boolean",
        "laborCost" => "float",
        "purchaseOrderQuantity" => "float",
        "purchaseOrderAmount" => "float",
        "purchaseOrderQuantityDiff" => "float",
        "receiptQuantity" => "float",
        "receiptAmount" => "float",
        "receiptQuantityDiff" => "float",
        "workCalendar" => "RecordRef",
        "taxIdNum" => "string",
        "taxItem" => "RecordRef",
        "giveAccess" => "boolean",
        "sendEmail" => "boolean",
        "billPay" => "boolean",
        "isAccountant" => "boolean",
        "password" => "string",
        "password2" => "string",
        "requirePwdChange" => "boolean",
        "eligibleForCommission" => "boolean",
        "emailTransactions" => "boolean",
        "printTransactions" => "boolean",
        "faxTransactions" => "boolean",
        "defaultTaxReg" => "RecordRef",
        "pricingScheduleList" => "VendorPricingScheduleList",
        "subscriptionsList" => "SubscriptionsList",
        "addressbookList" => "VendorAddressbookList",
        "currencyList" => "VendorCurrencyList",
        "rolesList" => "VendorRolesList",
        "taxRegistrationList" => "VendorTaxRegistrationList",
        "predictedDays" => "integer",
        "predConfidence" => "float",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
