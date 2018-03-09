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

class OtherChargePurchaseItem extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $purchaseDescription;
    public $manufacturingChargeItem;
    public $cost;
    public $costUnits;
    public $expenseAccount;
    public $isTaxable;
    public $matrixType;
    public $unitsType;
    public $purchaseUnit;
    public $includeChildren;
    public $issueProduct;
    public $customForm;
    public $itemId;
    public $upcCode;
    public $displayName;
    public $vendorName;
    public $parent;
    public $isInactive;
    public $matrixItemNameTemplate;
    public $availableToPartners;
    public $department;
    public $class;
    public $subsidiaryList;
    public $location;
    public $taxSchedule;
    public $deferralAccount;
    public $amortizationTemplate;
    public $residual;
    public $amortizationPeriod;
    public $isFulfillable;
    public $generateAccruals;
    public $accountingBookDetailList;
    public $costCategory;
    public $overheadType;
    public $purchaseOrderQuantity;
    public $purchaseOrderAmount;
    public $purchaseOrderQuantityDiff;
    public $receiptQuantity;
    public $receiptAmount;
    public $receiptQuantityDiff;
    public $currency;
    public $itemOptionsList;
    public $matrixOptionList;
    public $itemVendorList;
    public $purchaseTaxCode;
    public $salesTaxCode;
    public $translationsList;
    public $vendor;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "purchaseDescription" => "string",
        "manufacturingChargeItem" => "boolean",
        "cost" => "float",
        "costUnits" => "string",
        "expenseAccount" => "RecordRef",
        "isTaxable" => "boolean",
        "matrixType" => "ItemMatrixType",
        "unitsType" => "RecordRef",
        "purchaseUnit" => "RecordRef",
        "includeChildren" => "boolean",
        "issueProduct" => "RecordRef",
        "customForm" => "RecordRef",
        "itemId" => "string",
        "upcCode" => "string",
        "displayName" => "string",
        "vendorName" => "string",
        "parent" => "RecordRef",
        "isInactive" => "boolean",
        "matrixItemNameTemplate" => "string",
        "availableToPartners" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "subsidiaryList" => "RecordRefList",
        "location" => "RecordRef",
        "taxSchedule" => "RecordRef",
        "deferralAccount" => "RecordRef",
        "amortizationTemplate" => "RecordRef",
        "residual" => "string",
        "amortizationPeriod" => "integer",
        "isFulfillable" => "boolean",
        "generateAccruals" => "boolean",
        "accountingBookDetailList" => "ItemAccountingBookDetailList",
        "costCategory" => "RecordRef",
        "overheadType" => "ItemOverheadType",
        "purchaseOrderQuantity" => "float",
        "purchaseOrderAmount" => "float",
        "purchaseOrderQuantityDiff" => "float",
        "receiptQuantity" => "float",
        "receiptAmount" => "float",
        "receiptQuantityDiff" => "float",
        "currency" => "string",
        "itemOptionsList" => "ItemOptionsList",
        "matrixOptionList" => "MatrixOptionList",
        "itemVendorList" => "ItemVendorList",
        "purchaseTaxCode" => "RecordRef",
        "salesTaxCode" => "RecordRef",
        "translationsList" => "TranslationList",
        "vendor" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
