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

class ServiceResaleItem extends Record {
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
    public $taxSchedule;
    public $matrixType;
    public $isTaxable;
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
    public $enforceMinQtyInternally;
    public $softDescriptor;
    public $pricesIncludeTax;
    public $quantityPricingSchedule;
    public $useMarginalRates;
    public $overallQuantityPricingType;
    public $isFulfillable;
    public $generateAccruals;
    public $costCategory;
    public $purchaseOrderQuantity;
    public $purchaseOrderAmount;
    public $purchaseOrderQuantityDiff;
    public $receiptQuantity;
    public $receiptAmount;
    public $receiptQuantityDiff;
    public $pricingGroup;
    public $minimumQuantityUnits;
    public $vsoePrice;
    public $vsoeSopGroup;
    public $vsoeDeferral;
    public $vsoePermitDiscount;
    public $vsoeDelivered;
    public $itemRevenueCategory;
    public $createJob;
    public $matrixItemNameTemplate;
    public $storeDisplayName;
    public $storeDisplayThumbnail;
    public $storeDisplayImage;
    public $storeDescription;
    public $storeDetailedDescription;
    public $storeItemTemplate;
    public $pageTitle;
    public $urlComponent;
    public $metaTagHtml;
    public $excludeFromSitemap;
    public $sitemapPriority;
    public $searchKeywords;
    public $isDonationItem;
    public $showDefaultDonationAmount;
    public $maxDonationAmount;
    public $dontShowPrice;
    public $noPriceMessage;
    public $outOfStockMessage;
    public $onSpecial;
    public $outOfStockBehavior;
    public $relatedItemsDescription;
    public $specialsDescription;
    public $itemTaskTemplatesList;
    public $featuredDescription;
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
    public $availableToPartners;
    public $department;
    public $class;
    public $location;
    public $subsidiaryList;
    public $currency;
    public $billingRatesMatrix;
    public $accountingBookDetailList;
    public $itemOptionsList;
    public $matrixOptionList;
    public $itemVendorList;
    public $pricingMatrix;
    public $purchaseTaxCode;
    public $rate;
    public $salesTaxCode;
    public $siteCategoryList;
    public $translationsList;
    public $vendor;
    public $presentationItemList;
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
        "taxSchedule" => "RecordRef",
        "matrixType" => "ItemMatrixType",
        "isTaxable" => "boolean",
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
        "enforceMinQtyInternally" => "boolean",
        "softDescriptor" => "string",
        "pricesIncludeTax" => "boolean",
        "quantityPricingSchedule" => "RecordRef",
        "useMarginalRates" => "boolean",
        "overallQuantityPricingType" => "ItemOverallQuantityPricingType",
        "isFulfillable" => "boolean",
        "generateAccruals" => "boolean",
        "costCategory" => "RecordRef",
        "purchaseOrderQuantity" => "float",
        "purchaseOrderAmount" => "float",
        "purchaseOrderQuantityDiff" => "float",
        "receiptQuantity" => "float",
        "receiptAmount" => "float",
        "receiptQuantityDiff" => "float",
        "pricingGroup" => "RecordRef",
        "minimumQuantityUnits" => "string",
        "vsoePrice" => "float",
        "vsoeSopGroup" => "VsoeSopGroup",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "itemRevenueCategory" => "RecordRef",
        "createJob" => "boolean",
        "matrixItemNameTemplate" => "string",
        "storeDisplayName" => "string",
        "storeDisplayThumbnail" => "RecordRef",
        "storeDisplayImage" => "RecordRef",
        "storeDescription" => "string",
        "storeDetailedDescription" => "string",
        "storeItemTemplate" => "RecordRef",
        "pageTitle" => "string",
        "urlComponent" => "string",
        "metaTagHtml" => "string",
        "excludeFromSitemap" => "boolean",
        "sitemapPriority" => "SitemapPriority",
        "searchKeywords" => "string",
        "isDonationItem" => "boolean",
        "showDefaultDonationAmount" => "boolean",
        "maxDonationAmount" => "float",
        "dontShowPrice" => "boolean",
        "noPriceMessage" => "string",
        "outOfStockMessage" => "string",
        "onSpecial" => "boolean",
        "outOfStockBehavior" => "ItemOutOfStockBehavior",
        "relatedItemsDescription" => "string",
        "specialsDescription" => "string",
        "itemTaskTemplatesList" => "ServiceItemTaskTemplatesList",
        "featuredDescription" => "string",
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
        "availableToPartners" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiaryList" => "RecordRefList",
        "currency" => "string",
        "billingRatesMatrix" => "BillingRatesMatrix",
        "accountingBookDetailList" => "ItemAccountingBookDetailList",
        "itemOptionsList" => "ItemOptionsList",
        "matrixOptionList" => "MatrixOptionList",
        "itemVendorList" => "ItemVendorList",
        "pricingMatrix" => "PricingMatrix",
        "purchaseTaxCode" => "RecordRef",
        "rate" => "float",
        "salesTaxCode" => "RecordRef",
        "siteCategoryList" => "SiteCategoryList",
        "translationsList" => "TranslationList",
        "vendor" => "RecordRef",
        "presentationItemList" => "PresentationItemList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
