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

class VendorBill extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $nexus;
    public $subsidiaryTaxRegNum;
    public $taxRegOverride;
    public $taxDetailsOverride;
    public $customForm;
    public $billAddressList;
    public $account;
    public $entity;
    public $subsidiary;
    public $approvalStatus;
    public $nextApprover;
    public $vatRegNum;
    public $postingPeriod;
    public $tranDate;
    public $currencyName;
    public $billingAddress;
    public $exchangeRate;
    public $entityTaxRegNum;
    public $terms;
    public $dueDate;
    public $discountDate;
    public $tranId;
    public $userTotal;
    public $discountAmount;
    public $taxTotal;
    public $paymentHold;
    public $memo;
    public $tax2Total;
    public $creditLimit;
    public $availableVendorCredit;
    public $currency;
    public $class;
    public $department;
    public $location;
    public $status;
    public $landedCostMethod;
    public $landedCostPerLine;
    public $transactionNumber;
    public $expenseList;
    public $accountingBookDetailList;
    public $itemList;
    public $landedCostsList;
    public $purchaseOrderList;
    public $taxDetailsList;
    public $customFieldList;
    public $internalId;
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
        "landedCostsList" => "PurchLandedCostList",
        "purchaseOrderList" => "RecordRefList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
