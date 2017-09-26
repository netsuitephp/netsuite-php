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

class InventoryItem extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $purchaseDescription;
    public $copyDescription;
    public $expenseAccount;
    public $dateConvertedToInv;
    public $originalItemType;
    public $originalItemSubtype;
    public $cogsAccount;
    public $intercoCogsAccount;
    public $salesDescription;
    public $fraudRisk;
    public $includeChildren;
    public $incomeAccount;
    public $intercoIncomeAccount;
    public $taxSchedule;
    public $dropshipExpenseAccount;
    public $deferRevRec;
    public $revenueRecognitionRule;
    public $revRecForecastRule;
    public $revenueAllocationGroup;
    public $createRevenuePlansOn;
    public $directRevenuePosting;
    public $isTaxable;
    public $matrixType;
    public $assetAccount;
    public $matchBillToReceipt;
    public $billQtyVarianceAcct;
    public $billPriceVarianceAcct;
    public $billExchRateVarianceAcct;
    public $gainLossAccount;
    public $shippingCost;
    public $shippingCostUnits;
    public $handlingCost;
    public $handlingCostUnits;
    public $weight;
    public $weightUnit;
    public $weightUnits;
    public $costingMethodDisplay;
    public $unitsType;
    public $stockUnit;
    public $purchaseUnit;
    public $saleUnit;
    public $issueProduct;
    public $billingSchedule;
    public $trackLandedCost;
    public $matrixItemNameTemplate;
    public $isDropShipItem;
    public $isSpecialOrderItem;
    public $stockDescription;
    public $deferredRevenueAccount;
    public $producer;
    public $manufacturer;
    public $revRecSchedule;
    public $mpn;
    public $multManufactureAddr;
    public $manufacturerAddr1;
    public $manufacturerCity;
    public $manufacturerState;
    public $manufacturerZip;
    public $countryOfManufacture;
    public $roundUpAsComponent;
    public $purchaseOrderQuantity;
    public $purchaseOrderAmount;
    public $purchaseOrderQuantityDiff;
    public $receiptQuantity;
    public $receiptAmount;
    public $receiptQuantityDiff;
    public $defaultItemShipMethod;
    public $itemCarrier;
    public $itemShipMethodList;
    public $manufacturerTaxId;
    public $scheduleBNumber;
    public $scheduleBQuantity;
    public $scheduleBCode;
    public $manufacturerTariff;
    public $preferenceCriterion;
    public $minimumQuantity;
    public $enforceMinQtyInternally;
    public $minimumQuantityUnits;
    public $softDescriptor;
    public $shipPackage;
    public $shipIndividually;
    public $costCategory;
    public $pricesIncludeTax;
    public $purchasePriceVarianceAcct;
    public $quantityPricingSchedule;
    public $reorderPointUnits;
    public $useMarginalRates;
    public $preferredStockLevelUnits;
    public $costEstimateType;
    public $costEstimate;
    public $transferPrice;
    public $overallQuantityPricingType;
    public $pricingGroup;
    public $vsoePrice;
    public $vsoeSopGroup;
    public $costEstimateUnits;
    public $vsoeDeferral;
    public $vsoePermitDiscount;
    public $vsoeDelivered;
    public $itemRevenueCategory;
    public $preferredLocation;
    public $isStorePickupAllowed;
    public $reorderMultiple;
    public $cost;
    public $lastInvtCountDate;
    public $nextInvtCountDate;
    public $invtCountInterval;
    public $invtClassification;
    public $costUnits;
    public $totalValue;
    public $averageCost;
    public $useBins;
    public $quantityReorderUnits;
    public $leadTime;
    public $autoLeadTime;
    public $lastPurchasePrice;
    public $autoPreferredStockLevel;
    public $preferredStockLevelDays;
    public $safetyStockLevel;
    public $safetyStockLevelDays;
    public $backwardConsumptionDays;
    public $seasonalDemand;
    public $safetyStockLevelUnits;
    public $demandModifier;
    public $distributionNetwork;
    public $distributionCategory;
    public $autoReorderPoint;
    public $storeDisplayName;
    public $storeDisplayThumbnail;
    public $storeDisplayImage;
    public $storeDescription;
    public $storeDetailedDescription;
    public $storeItemTemplate;
    public $pageTitle;
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
    public $featuredDescription;
    public $shoppingDotComCategory;
    public $shopzillaCategoryId;
    public $nexTagCategory;
    public $urlComponent;
    public $customForm;
    public $itemId;
    public $upcCode;
    public $displayName;
    public $vendorName;
    public $parent;
    public $isOnline;
    public $isHazmatItem;
    public $hazmatId;
    public $hazmatShippingName;
    public $hazmatHazardClass;
    public $hazmatPackingGroup;
    public $hazmatItemUnits;
    public $hazmatItemUnitsQty;
    public $isGcoCompliant;
    public $offerSupport;
    public $isInactive;
    public $availableToPartners;
    public $department;
    public $class;
    public $location;
    public $costingMethod;
    public $currency;
    public $preferredStockLevel;
    public $pricingMatrix;
    public $accountingBookDetailList;
    public $purchaseTaxCode;
    public $defaultReturnCost;
    public $supplyReplenishmentMethod;
    public $alternateDemandSourceItem;
    public $fixedLotSize;
    public $periodicLotSizeType;
    public $supplyType;
    public $demandTimeFence;
    public $supplyTimeFence;
    public $rescheduleInDays;
    public $rescheduleOutDays;
    public $periodicLotSizeDays;
    public $supplyLotSizingMethod;
    public $forwardConsumptionDays;
    public $demandSource;
    public $quantityBackOrdered;
    public $quantityCommitted;
    public $quantityAvailable;
    public $quantityOnHand;
    public $onHandValueMli;
    public $quantityOnOrder;
    public $rate;
    public $reorderPoint;
    public $quantityCommittedUnits;
    public $salesTaxCode;
    public $quantityAvailableUnits;
    public $quantityOnHandUnits;
    public $vendor;
    public $quantityOnOrderUnits;
    public $productFeedList;
    public $subsidiaryList;
    public $itemOptionsList;
    public $itemVendorList;
    public $siteCategoryList;
    public $translationsList;
    public $binNumberList;
    public $locationsList;
    public $matrixOptionList;
    public $presentationItemList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "purchaseDescription" => "string",
        "copyDescription" => "boolean",
        "expenseAccount" => "RecordRef",
        "dateConvertedToInv" => "dateTime",
        "originalItemType" => "ItemType",
        "originalItemSubtype" => "ItemSubType",
        "cogsAccount" => "RecordRef",
        "intercoCogsAccount" => "RecordRef",
        "salesDescription" => "string",
        "fraudRisk" => "InventoryItemFraudRisk",
        "includeChildren" => "boolean",
        "incomeAccount" => "RecordRef",
        "intercoIncomeAccount" => "RecordRef",
        "taxSchedule" => "RecordRef",
        "dropshipExpenseAccount" => "RecordRef",
        "deferRevRec" => "boolean",
        "revenueRecognitionRule" => "RecordRef",
        "revRecForecastRule" => "RecordRef",
        "revenueAllocationGroup" => "RecordRef",
        "createRevenuePlansOn" => "ItemCreateRevenuePlansOn",
        "directRevenuePosting" => "boolean",
        "isTaxable" => "boolean",
        "matrixType" => "ItemMatrixType",
        "assetAccount" => "RecordRef",
        "matchBillToReceipt" => "boolean",
        "billQtyVarianceAcct" => "RecordRef",
        "billPriceVarianceAcct" => "RecordRef",
        "billExchRateVarianceAcct" => "RecordRef",
        "gainLossAccount" => "RecordRef",
        "shippingCost" => "float",
        "shippingCostUnits" => "string",
        "handlingCost" => "float",
        "handlingCostUnits" => "string",
        "weight" => "float",
        "weightUnit" => "ItemWeightUnit",
        "weightUnits" => "string",
        "costingMethodDisplay" => "string",
        "unitsType" => "RecordRef",
        "stockUnit" => "RecordRef",
        "purchaseUnit" => "RecordRef",
        "saleUnit" => "RecordRef",
        "issueProduct" => "RecordRef",
        "billingSchedule" => "RecordRef",
        "trackLandedCost" => "boolean",
        "matrixItemNameTemplate" => "string",
        "isDropShipItem" => "boolean",
        "isSpecialOrderItem" => "boolean",
        "stockDescription" => "string",
        "deferredRevenueAccount" => "RecordRef",
        "producer" => "boolean",
        "manufacturer" => "string",
        "revRecSchedule" => "RecordRef",
        "mpn" => "string",
        "multManufactureAddr" => "boolean",
        "manufacturerAddr1" => "string",
        "manufacturerCity" => "string",
        "manufacturerState" => "string",
        "manufacturerZip" => "string",
        "countryOfManufacture" => "Country",
        "roundUpAsComponent" => "boolean",
        "purchaseOrderQuantity" => "float",
        "purchaseOrderAmount" => "float",
        "purchaseOrderQuantityDiff" => "float",
        "receiptQuantity" => "float",
        "receiptAmount" => "float",
        "receiptQuantityDiff" => "float",
        "defaultItemShipMethod" => "RecordRef",
        "itemCarrier" => "ShippingCarrier",
        "itemShipMethodList" => "RecordRefList",
        "manufacturerTaxId" => "string",
        "scheduleBNumber" => "string",
        "scheduleBQuantity" => "integer",
        "scheduleBCode" => "ScheduleBCode",
        "manufacturerTariff" => "string",
        "preferenceCriterion" => "ItemPreferenceCriterion",
        "minimumQuantity" => "integer",
        "enforceMinQtyInternally" => "boolean",
        "minimumQuantityUnits" => "string",
        "softDescriptor" => "RecordRef",
        "shipPackage" => "RecordRef",
        "shipIndividually" => "boolean",
        "costCategory" => "RecordRef",
        "pricesIncludeTax" => "boolean",
        "purchasePriceVarianceAcct" => "RecordRef",
        "quantityPricingSchedule" => "RecordRef",
        "reorderPointUnits" => "string",
        "useMarginalRates" => "boolean",
        "preferredStockLevelUnits" => "string",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "transferPrice" => "float",
        "overallQuantityPricingType" => "ItemOverallQuantityPricingType",
        "pricingGroup" => "RecordRef",
        "vsoePrice" => "float",
        "vsoeSopGroup" => "VsoeSopGroup",
        "costEstimateUnits" => "string",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "itemRevenueCategory" => "RecordRef",
        "preferredLocation" => "RecordRef",
        "isStorePickupAllowed" => "boolean",
        "reorderMultiple" => "integer",
        "cost" => "float",
        "lastInvtCountDate" => "dateTime",
        "nextInvtCountDate" => "dateTime",
        "invtCountInterval" => "integer",
        "invtClassification" => "ItemInvtClassification",
        "costUnits" => "string",
        "totalValue" => "float",
        "averageCost" => "float",
        "useBins" => "boolean",
        "quantityReorderUnits" => "string",
        "leadTime" => "integer",
        "autoLeadTime" => "boolean",
        "lastPurchasePrice" => "float",
        "autoPreferredStockLevel" => "boolean",
        "preferredStockLevelDays" => "float",
        "safetyStockLevel" => "float",
        "safetyStockLevelDays" => "integer",
        "backwardConsumptionDays" => "integer",
        "seasonalDemand" => "boolean",
        "safetyStockLevelUnits" => "string",
        "demandModifier" => "float",
        "distributionNetwork" => "RecordRef",
        "distributionCategory" => "RecordRef",
        "autoReorderPoint" => "boolean",
        "storeDisplayName" => "string",
        "storeDisplayThumbnail" => "RecordRef",
        "storeDisplayImage" => "RecordRef",
        "storeDescription" => "string",
        "storeDetailedDescription" => "string",
        "storeItemTemplate" => "RecordRef",
        "pageTitle" => "string",
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
        "featuredDescription" => "string",
        "shoppingDotComCategory" => "string",
        "shopzillaCategoryId" => "integer",
        "nexTagCategory" => "string",
        "urlComponent" => "string",
        "customForm" => "RecordRef",
        "itemId" => "string",
        "upcCode" => "string",
        "displayName" => "string",
        "vendorName" => "string",
        "parent" => "RecordRef",
        "isOnline" => "boolean",
        "isHazmatItem" => "boolean",
        "hazmatId" => "string",
        "hazmatShippingName" => "string",
        "hazmatHazardClass" => "string",
        "hazmatPackingGroup" => "HazmatPackingGroup",
        "hazmatItemUnits" => "string",
        "hazmatItemUnitsQty" => "float",
        "isGcoCompliant" => "boolean",
        "offerSupport" => "boolean",
        "isInactive" => "boolean",
        "availableToPartners" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "costingMethod" => "ItemCostingMethod",
        "currency" => "string",
        "preferredStockLevel" => "float",
        "pricingMatrix" => "PricingMatrix",
        "accountingBookDetailList" => "ItemAccountingBookDetailList",
        "purchaseTaxCode" => "RecordRef",
        "defaultReturnCost" => "float",
        "supplyReplenishmentMethod" => "RecordRef",
        "alternateDemandSourceItem" => "RecordRef",
        "fixedLotSize" => "float",
        "periodicLotSizeType" => "PeriodicLotSizeType",
        "supplyType" => "RecordRef",
        "demandTimeFence" => "integer",
        "supplyTimeFence" => "integer",
        "rescheduleInDays" => "integer",
        "rescheduleOutDays" => "integer",
        "periodicLotSizeDays" => "integer",
        "supplyLotSizingMethod" => "RecordRef",
        "forwardConsumptionDays" => "integer",
        "demandSource" => "RecordRef",
        "quantityBackOrdered" => "float",
        "quantityCommitted" => "float",
        "quantityAvailable" => "float",
        "quantityOnHand" => "float",
        "onHandValueMli" => "float",
        "quantityOnOrder" => "float",
        "rate" => "float",
        "reorderPoint" => "float",
        "quantityCommittedUnits" => "string",
        "salesTaxCode" => "RecordRef",
        "quantityAvailableUnits" => "string",
        "quantityOnHandUnits" => "string",
        "vendor" => "RecordRef",
        "quantityOnOrderUnits" => "string",
        "productFeedList" => "ProductFeedList",
        "subsidiaryList" => "RecordRefList",
        "itemOptionsList" => "ItemOptionsList",
        "itemVendorList" => "ItemVendorList",
        "siteCategoryList" => "SiteCategoryList",
        "translationsList" => "TranslationList",
        "binNumberList" => "InventoryItemBinNumberList",
        "locationsList" => "InventoryItemLocationsList",
        "matrixOptionList" => "MatrixOptionList",
        "presentationItemList" => "PresentationItemList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
