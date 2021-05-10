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

class VendorBill extends Record {
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
    public $approvalStatus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $nextApprover;
    /**
     * @var string
     */
    public $vatRegNum;
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
     * @var string
     */
    public $taxPointDate;
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
     * @var float
     */
    public $tax2Total;
    /**
     * @var float
     */
    public $creditLimit;
    /**
     * @var float
     */
    public $availableVendorCredit;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
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
     * @var \NetSuite\Classes\LandedCostMethod
     */
    public $landedCostMethod;
    /**
     * @var boolean
     */
    public $landedCostPerLine;
    /**
     * @var string
     */
    public $transactionNumber;
    /**
     * @var \NetSuite\Classes\VendorBillExpenseList
     */
    public $expenseList;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var \NetSuite\Classes\VendorBillItemList
     */
    public $itemList;
    /**
     * @var \NetSuite\Classes\InstallmentList
     */
    public $installmentList;
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
     * @var boolean
     */
    public $overrideInstallments;
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
        "nexus" => "RecordRef",
        "subsidiaryTaxRegNum" => "RecordRef",
        "taxRegOverride" => "boolean",
        "taxDetailsOverride" => "boolean",
        "customForm" => "RecordRef",
        "billAddressList" => "RecordRef",
        "account" => "RecordRef",
        "entity" => "RecordRef",
        "subsidiary" => "RecordRef",
        "approvalStatus" => "RecordRef",
        "nextApprover" => "RecordRef",
        "vatRegNum" => "string",
        "postingPeriod" => "RecordRef",
        "tranDate" => "dateTime",
        "currencyName" => "string",
        "billingAddress" => "Address",
        "exchangeRate" => "float",
        "entityTaxRegNum" => "RecordRef",
        "taxPointDate" => "dateTime",
        "terms" => "RecordRef",
        "dueDate" => "dateTime",
        "discountDate" => "dateTime",
        "tranId" => "string",
        "userTotal" => "float",
        "discountAmount" => "float",
        "taxTotal" => "float",
        "paymentHold" => "boolean",
        "memo" => "string",
        "tax2Total" => "float",
        "creditLimit" => "float",
        "availableVendorCredit" => "float",
        "currency" => "RecordRef",
        "class" => "RecordRef",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "status" => "string",
        "landedCostMethod" => "LandedCostMethod",
        "landedCostPerLine" => "boolean",
        "transactionNumber" => "string",
        "expenseList" => "VendorBillExpenseList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "itemList" => "VendorBillItemList",
        "installmentList" => "InstallmentList",
        "landedCostsList" => "PurchLandedCostList",
        "purchaseOrderList" => "RecordRefList",
        "taxDetailsList" => "TaxDetailsList",
        "overrideInstallments" => "boolean",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
