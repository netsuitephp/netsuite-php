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

class CustomPurchase extends Record {
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
    public $tranType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $nexus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiaryTaxRegNum;
    /**
     * @var boolean
     */
    public $taxRegOverride;
    /**
     * @var boolean
     */
    public $taxDetailsOverride;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billAddressList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $account;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $postingPeriod;
    /**
     * @var string
     */
    public $tranDate;
    /**
     * @var string
     */
    public $currencyName;
    /**
     * @var \NetSuite\Classes\Address
     */
    public $billingAddress;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entityTaxRegNum;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $terms;
    /**
     * @var string
     */
    public $dueDate;
    /**
     * @var string
     */
    public $discountDate;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $createdFrom;
    /**
     * @var float
     */
    public $userTotal;
    /**
     * @var float
     */
    public $discountAmount;
    /**
     * @var float
     */
    public $taxTotal;
    /**
     * @var boolean
     */
    public $paymentHold;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $tranStatus;
    /**
     * @var float
     */
    public $availableVendorCredit;
    /**
     * @var \NetSuite\Classes\LandedCostMethod
     */
    public $landedCostMethod;
    /**
     * @var boolean
     */
    public $landedCostPerLine;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $incoterm;
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
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $transactionNumber;
    /**
     * @var boolean
     */
    public $overrideInstallments;
    /**
     * @var \NetSuite\Classes\InstallmentList
     */
    public $installmentList;
    /**
     * @var \NetSuite\Classes\CustomPurchaseExpenseList
     */
    public $expenseList;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var \NetSuite\Classes\CustomPurchaseItemList
     */
    public $itemList;
    /**
     * @var \NetSuite\Classes\PurchLandedCostList
     */
    public $landedCostsList;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $purchaseOrderList;
    /**
     * @var \NetSuite\Classes\TaxDetailsList
     */
    public $taxDetailsList;
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
        "tranType" => "RecordRef",
        "nexus" => "RecordRef",
        "subsidiaryTaxRegNum" => "RecordRef",
        "taxRegOverride" => "boolean",
        "taxDetailsOverride" => "boolean",
        "customForm" => "RecordRef",
        "billAddressList" => "RecordRef",
        "account" => "RecordRef",
        "entity" => "RecordRef",
        "subsidiary" => "RecordRef",
        "postingPeriod" => "RecordRef",
        "tranDate" => "dateTime",
        "currencyName" => "string",
        "billingAddress" => "Address",
        "exchangeRate" => "float",
        "entityTaxRegNum" => "RecordRef",
        "terms" => "RecordRef",
        "dueDate" => "dateTime",
        "discountDate" => "dateTime",
        "tranId" => "string",
        "createdFrom" => "RecordRef",
        "userTotal" => "float",
        "discountAmount" => "float",
        "taxTotal" => "float",
        "paymentHold" => "boolean",
        "memo" => "string",
        "tranStatus" => "RecordRef",
        "availableVendorCredit" => "float",
        "landedCostMethod" => "LandedCostMethod",
        "landedCostPerLine" => "boolean",
        "currency" => "RecordRef",
        "incoterm" => "RecordRef",
        "class" => "RecordRef",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "status" => "string",
        "transactionNumber" => "string",
        "overrideInstallments" => "boolean",
        "installmentList" => "InstallmentList",
        "expenseList" => "CustomPurchaseExpenseList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "itemList" => "CustomPurchaseItemList",
        "landedCostsList" => "PurchLandedCostList",
        "purchaseOrderList" => "RecordRefList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
