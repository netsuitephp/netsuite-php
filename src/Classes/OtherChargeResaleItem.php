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

class OtherChargeResaleItem extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $purchaseDescription;
    public $manufacturingChargeItem;
    public $cost;
    public $costUnits;
    public $expenseAccount;
    public $intercoExpenseAccount;
    public $salesDescription;
    public $includeChildren;
    public $incomeAccount;
    public $intercoIncomeAccount;
    public $isTaxable;
    public $matrixType;
    public $taxSchedule;
    public $costEstimateType;
    public $costEstimate;
    public $unitsType;
    public $purchaseUnit;
    public $saleUnit;
    public $costEstimateUnits;
    public $issueProduct;
    public $billingSchedule;
    public $deferredRevenueAccount;
    public $revRecSchedule;
    public $deferralAccount;
    public $amortizationTemplate;
    public $residual;
    public $deferRevRec;
    public $revenueRecognitionRule;
    public $revRecForecastRule;
    public $revenueAllocationGroup;
    public $createRevenuePlansOn;
    public $directRevenuePosting;
    public $amortizationPeriod;
    public $minimumQuantity;
    public $minimumQuantityUnits;
    public $enforceMinQtyInternally;
    public $softDescriptor;
    public $isFulfillable;
    public $generateAccruals;
    public $costCategory;
    public $purchaseOrderQuantity;
    public $purchaseOrderAmount;
    public $purchaseOrderQuantityDiff;
    public $receiptQuantity;
    public $receiptAmount;
    public $receiptQuantityDiff;
    public $pricesIncludeTax;
    public $quantityPricingSchedule;
    public $useMarginalRates;
    public $overallQuantityPricingType;
    public $pricingGroup;
    public $customForm;
    public $itemId;
    public $upcCode;
    public $displayName;
    public $vendorName;
    public $parent;
    public $isOnline;
    public $isGcoCompliant;
    public $offerSupport;
    public $isInactive;
    public $matrixItemNameTemplate;
    public $availableToPartners;
    public $department;
    public $class;
    public $location;
    public $subsidiaryList;
    public $vsoePrice;
    public $vsoeSopGroup;
    public $vsoeDeferral;
    public $vsoePermitDiscount;
    public $vsoeDelivered;
    public $itemRevenueCategory;
    public $currency;
    public $itemOptionsList;
    public $matrixOptionList;
    public $itemVendorList;
    public $pricingMatrix;
    public $accountingBookDetailList;
    public $purchaseTaxCode;
    public $rate;
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
        "intercoExpenseAccount" => "RecordRef",
        "salesDescription" => "string",
        "includeChildren" => "boolean",
        "incomeAccount" => "RecordRef",
        "intercoIncomeAccount" => "RecordRef",
        "isTaxable" => "boolean",
        "matrixType" => "ItemMatrixType",
        "taxSchedule" => "RecordRef",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "unitsType" => "RecordRef",
        "purchaseUnit" => "RecordRef",
        "saleUnit" => "RecordRef",
        "costEstimateUnits" => "string",
        "issueProduct" => "RecordRef",
        "billingSchedule" => "RecordRef",
        "deferredRevenueAccount" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "deferralAccount" => "RecordRef",
        "amortizationTemplate" => "RecordRef",
        "residual" => "string",
        "deferRevRec" => "boolean",
        "revenueRecognitionRule" => "RecordRef",
        "revRecForecastRule" => "RecordRef",
        "revenueAllocationGroup" => "RecordRef",
        "createRevenuePlansOn" => "ItemCreateRevenuePlansOn",
        "directRevenuePosting" => "boolean",
        "amortizationPeriod" => "integer",
        "minimumQuantity" => "integer",
        "minimumQuantityUnits" => "string",
        "enforceMinQtyInternally" => "boolean",
        "softDescriptor" => "string",
        "isFulfillable" => "boolean",
        "generateAccruals" => "boolean",
        "costCategory" => "RecordRef",
        "purchaseOrderQuantity" => "float",
        "purchaseOrderAmount" => "float",
        "purchaseOrderQuantityDiff" => "float",
        "receiptQuantity" => "float",
        "receiptAmount" => "float",
        "receiptQuantityDiff" => "float",
        "pricesIncludeTax" => "boolean",
        "quantityPricingSchedule" => "RecordRef",
        "useMarginalRates" => "boolean",
        "overallQuantityPricingType" => "ItemOverallQuantityPricingType",
        "pricingGroup" => "RecordRef",
        "customForm" => "RecordRef",
        "itemId" => "string",
        "upcCode" => "string",
        "displayName" => "string",
        "vendorName" => "string",
        "parent" => "RecordRef",
        "isOnline" => "boolean",
        "isGcoCompliant" => "boolean",
        "offerSupport" => "boolean",
        "isInactive" => "boolean",
        "matrixItemNameTemplate" => "string",
        "availableToPartners" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiaryList" => "RecordRefList",
        "vsoePrice" => "float",
        "vsoeSopGroup" => "VsoeSopGroup",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "itemRevenueCategory" => "RecordRef",
        "currency" => "string",
        "itemOptionsList" => "ItemOptionsList",
        "matrixOptionList" => "MatrixOptionList",
        "itemVendorList" => "ItemVendorList",
        "pricingMatrix" => "PricingMatrix",
        "accountingBookDetailList" => "ItemAccountingBookDetailList",
        "purchaseTaxCode" => "RecordRef",
        "rate" => "float",
        "salesTaxCode" => "RecordRef",
        "translationsList" => "TranslationList",
        "vendor" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
