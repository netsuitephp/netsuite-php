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

class AssemblyItem extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $customForm;
    public $itemId;
    public $upcCode;
    public $displayName;
    public $vendorName;
    public $parent;
    public $printItems;
    public $vendor;
    public $isOnline;
    public $isGcoCompliant;
    public $offerSupport;
    public $isInactive;
    public $availableToPartners;
    public $subsidiaryList;
    public $department;
    public $includeChildren;
    public $class;
    public $location;
    public $description;
    public $cogsAccount;
    public $incomeAccount;
    public $intercoIncomeAccount;
    public $assetAccount;
    public $matchBillToReceipt;
    public $billQtyVarianceAcct;
    public $billPriceVarianceAcct;
    public $billExchRateVarianceAcct;
    public $gainLossAccount;
    public $salesTaxCode;
    public $useComponentYield;
    public $wipVarianceAcct;
    public $purchaseTaxCode;
    public $scrapAcct;
    public $taxSchedule;
    public $wipAcct;
    public $shippingCost;
    public $handlingCost;
    public $weight;
    public $weightUnit;
    public $isTaxable;
    public $costingMethod;
    public $rate;
    public $costingMethodDisplay;
    public $unitsType;
    public $stockUnit;
    public $purchaseUnit;
    public $saleUnit;
    public $trackLandedCost;
    public $matrixItemNameTemplate;
    public $billingSchedule;
    public $deferredRevenueAccount;
    public $revRecSchedule;
    public $stockDescription;
    public $producer;
    public $manufacturer;
    public $mpn;
    public $multManufactureAddr;
    public $manufactureraddr1;
    public $manufacturerCity;
    public $manufacturerState;
    public $manufacturerZip;
    public $countryOfManufacture;
    public $effectiveBomControl;
    public $defaultRevision;
    public $roundUpAsComponent;
    public $purchaseOrderQuantity;
    public $purchaseOrderAmount;
    public $purchaseOrderQuantityDiff;
    public $receiptQuantity;
    public $receiptAmount;
    public $receiptQuantityDiff;
    public $isDropShipItem;
    public $isPhantom;
    public $defaultItemShipMethod;
    public $itemCarrier;
    public $itemShipMethodList;
    public $manufacturerTaxId;
    public $scheduleBNumber;
    public $scheduleBQuantity;
    public $scheduleBCode;
    public $manufacturerTariff;
    public $preferenceCriterion;
    public $issueProduct;
    public $minimumQuantity;
    public $lastInvtCountDate;
    public $nextInvtCountDate;
    public $invtCountInterval;
    public $invtClassification;
    public $enforceMinQtyInternally;
    public $softDescriptor;
    public $isSpecialWorkOrderItem;
    public $costCategory;
    public $pricesIncludeTax;
    public $prodQtyVarianceAcct;
    public $prodPriceVarianceAcct;
    public $purchasePriceVarianceAcct;
    public $quantityPricingSchedule;
    public $buildEntireAssembly;
    public $quantityOnHand;
    public $useMarginalRates;
    public $costEstimateType;
    public $isHazmatItem;
    public $hazmatId;
    public $hazmatShippingName;
    public $hazmatHazardClass;
    public $hazmatPackingGroup;
    public $hazmatItemUnits;
    public $hazmatItemUnitsQty;
    public $costEstimate;
    public $transferPrice;
    public $overallQuantityPricingType;
    public $pricingGroup;
    public $intercoCogsAccount;
    public $vsoePrice;
    public $vsoeSopGroup;
    public $vsoeDeferral;
    public $vsoePermitDiscount;
    public $vsoeDelivered;
    public $itemRevenueCategory;
    public $unbuildVarianceAccount;
    public $deferRevRec;
    public $revenueRecognitionRule;
    public $revRecForecastRule;
    public $revenueAllocationGroup;
    public $createRevenuePlansOn;
    public $directRevenuePosting;
    public $dropshipExpenseAccount;
    public $preferredLocation;
    public $isStorePickupAllowed;
    public $totalValue;
    public $useBins;
    public $averageCost;
    public $leadTime;
    public $autoLeadTime;
    public $buildTime;
    public $lastPurchasePrice;
    public $purchaseDescription;
    public $safetyStockLevel;
    public $safetyStockLevelDays;
    public $seasonalDemand;
    public $reorderMultiple;
    public $cost;
    public $reorderPoint;
    public $demandModifier;
    public $distributionNetwork;
    public $distributionCategory;
    public $preferredStockLevel;
    public $autoReorderPoint;
    public $autoPreferredStockLevel;
    public $preferredStockLevelDays;
    public $quantityCommitted;
    public $shipIndividually;
    public $quantityAvailable;
    public $shipPackage;
    public $quantityBackOrdered;
    public $storeDisplayName;
    public $defaultReturnCost;
    public $supplyReplenishmentMethod;
    public $alternateDemandSourceItem;
    public $fixedLotSize;
    public $supplyType;
    public $demandTimeFence;
    public $supplyTimeFence;
    public $rescheduleInDays;
    public $rescheduleOutDays;
    public $supplyLotSizingMethod;
    public $demandSource;
    public $quantityOnOrder;
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
    public $shoppingDotComCategory;
    public $outOfStockBehavior;
    public $shopzillaCategoryId;
    public $nexTagCategory;
    public $productFeedList;
    public $relatedItemsDescription;
    public $onSpecial;
    public $specialsDescription;
    public $featuredDescription;
    public $itemOptionsList;
    public $itemNumberOptionsList;
    public $itemVendorList;
    public $pricingMatrix;
    public $memberList;
    public $accountingBookDetailList;
    public $locationsList;
    public $siteCategoryList;
    public $binNumberList;
    public $translationsList;
    public $presentationItemList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "itemId" => "string",
        "upcCode" => "string",
        "displayName" => "string",
        "vendorName" => "string",
        "parent" => "RecordRef",
        "printItems" => "boolean",
        "vendor" => "RecordRef",
        "isOnline" => "boolean",
        "isGcoCompliant" => "boolean",
        "offerSupport" => "boolean",
        "isInactive" => "boolean",
        "availableToPartners" => "boolean",
        "subsidiaryList" => "RecordRefList",
        "department" => "RecordRef",
        "includeChildren" => "boolean",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "description" => "string",
        "cogsAccount" => "RecordRef",
        "incomeAccount" => "RecordRef",
        "intercoIncomeAccount" => "RecordRef",
        "assetAccount" => "RecordRef",
        "matchBillToReceipt" => "boolean",
        "billQtyVarianceAcct" => "RecordRef",
        "billPriceVarianceAcct" => "RecordRef",
        "billExchRateVarianceAcct" => "RecordRef",
        "gainLossAccount" => "RecordRef",
        "salesTaxCode" => "RecordRef",
        "useComponentYield" => "boolean",
        "wipVarianceAcct" => "RecordRef",
        "purchaseTaxCode" => "RecordRef",
        "scrapAcct" => "RecordRef",
        "taxSchedule" => "RecordRef",
        "wipAcct" => "RecordRef",
        "shippingCost" => "float",
        "handlingCost" => "float",
        "weight" => "float",
        "weightUnit" => "ItemWeightUnit",
        "isTaxable" => "boolean",
        "costingMethod" => "ItemCostingMethod",
        "rate" => "float",
        "costingMethodDisplay" => "string",
        "unitsType" => "RecordRef",
        "stockUnit" => "RecordRef",
        "purchaseUnit" => "RecordRef",
        "saleUnit" => "RecordRef",
        "trackLandedCost" => "boolean",
        "matrixItemNameTemplate" => "string",
        "billingSchedule" => "RecordRef",
        "deferredRevenueAccount" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "stockDescription" => "string",
        "producer" => "boolean",
        "manufacturer" => "string",
        "mpn" => "string",
        "multManufactureAddr" => "boolean",
        "manufactureraddr1" => "string",
        "manufacturerCity" => "string",
        "manufacturerState" => "string",
        "manufacturerZip" => "string",
        "countryOfManufacture" => "Country",
        "effectiveBomControl" => "AssemblyItemEffectiveBomControl",
        "defaultRevision" => "string",
        "roundUpAsComponent" => "boolean",
        "purchaseOrderQuantity" => "float",
        "purchaseOrderAmount" => "float",
        "purchaseOrderQuantityDiff" => "float",
        "receiptQuantity" => "float",
        "receiptAmount" => "float",
        "receiptQuantityDiff" => "float",
        "isDropShipItem" => "boolean",
        "isPhantom" => "boolean",
        "defaultItemShipMethod" => "RecordRef",
        "itemCarrier" => "ShippingCarrier",
        "itemShipMethodList" => "RecordRefList",
        "manufacturerTaxId" => "string",
        "scheduleBNumber" => "string",
        "scheduleBQuantity" => "integer",
        "scheduleBCode" => "RecordRef",
        "manufacturerTariff" => "string",
        "preferenceCriterion" => "ItemPreferenceCriterion",
        "issueProduct" => "RecordRef",
        "minimumQuantity" => "integer",
        "lastInvtCountDate" => "dateTime",
        "nextInvtCountDate" => "dateTime",
        "invtCountInterval" => "integer",
        "invtClassification" => "ItemInvtClassification",
        "enforceMinQtyInternally" => "boolean",
        "softDescriptor" => "RecordRef",
        "isSpecialWorkOrderItem" => "boolean",
        "costCategory" => "RecordRef",
        "pricesIncludeTax" => "boolean",
        "prodQtyVarianceAcct" => "RecordRef",
        "prodPriceVarianceAcct" => "RecordRef",
        "purchasePriceVarianceAcct" => "RecordRef",
        "quantityPricingSchedule" => "RecordRef",
        "buildEntireAssembly" => "boolean",
        "quantityOnHand" => "float",
        "useMarginalRates" => "boolean",
        "costEstimateType" => "ItemCostEstimateType",
        "isHazmatItem" => "boolean",
        "hazmatId" => "string",
        "hazmatShippingName" => "string",
        "hazmatHazardClass" => "string",
        "hazmatPackingGroup" => "HazmatPackingGroup",
        "hazmatItemUnits" => "string",
        "hazmatItemUnitsQty" => "float",
        "costEstimate" => "float",
        "transferPrice" => "float",
        "overallQuantityPricingType" => "ItemOverallQuantityPricingType",
        "pricingGroup" => "RecordRef",
        "intercoCogsAccount" => "RecordRef",
        "vsoePrice" => "float",
        "vsoeSopGroup" => "VsoeSopGroup",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "itemRevenueCategory" => "RecordRef",
        "unbuildVarianceAccount" => "RecordRef",
        "deferRevRec" => "boolean",
        "revenueRecognitionRule" => "RecordRef",
        "revRecForecastRule" => "RecordRef",
        "revenueAllocationGroup" => "RecordRef",
        "createRevenuePlansOn" => "ItemCreateRevenuePlansOn",
        "directRevenuePosting" => "boolean",
        "dropshipExpenseAccount" => "RecordRef",
        "preferredLocation" => "RecordRef",
        "isStorePickupAllowed" => "boolean",
        "totalValue" => "float",
        "useBins" => "boolean",
        "averageCost" => "float",
        "leadTime" => "integer",
        "autoLeadTime" => "boolean",
        "buildTime" => "integer",
        "lastPurchasePrice" => "float",
        "purchaseDescription" => "string",
        "safetyStockLevel" => "float",
        "safetyStockLevelDays" => "integer",
        "seasonalDemand" => "boolean",
        "reorderMultiple" => "integer",
        "cost" => "float",
        "reorderPoint" => "float",
        "demandModifier" => "float",
        "distributionNetwork" => "RecordRef",
        "distributionCategory" => "RecordRef",
        "preferredStockLevel" => "float",
        "autoReorderPoint" => "boolean",
        "autoPreferredStockLevel" => "boolean",
        "preferredStockLevelDays" => "float",
        "quantityCommitted" => "float",
        "shipIndividually" => "boolean",
        "quantityAvailable" => "float",
        "shipPackage" => "RecordRef",
        "quantityBackOrdered" => "float",
        "storeDisplayName" => "string",
        "defaultReturnCost" => "float",
        "supplyReplenishmentMethod" => "RecordRef",
        "alternateDemandSourceItem" => "RecordRef",
        "fixedLotSize" => "float",
        "supplyType" => "RecordRef",
        "demandTimeFence" => "integer",
        "supplyTimeFence" => "integer",
        "rescheduleInDays" => "integer",
        "rescheduleOutDays" => "integer",
        "supplyLotSizingMethod" => "RecordRef",
        "demandSource" => "RecordRef",
        "quantityOnOrder" => "float",
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
        "shoppingDotComCategory" => "string",
        "outOfStockBehavior" => "ItemOutOfStockBehavior",
        "shopzillaCategoryId" => "integer",
        "nexTagCategory" => "string",
        "productFeedList" => "ProductFeedList",
        "relatedItemsDescription" => "string",
        "onSpecial" => "boolean",
        "specialsDescription" => "string",
        "featuredDescription" => "string",
        "itemOptionsList" => "ItemOptionsList",
        "itemNumberOptionsList" => "RecordRefList",
        "itemVendorList" => "ItemVendorList",
        "pricingMatrix" => "PricingMatrix",
        "memberList" => "ItemMemberList",
        "accountingBookDetailList" => "ItemAccountingBookDetailList",
        "locationsList" => "InventoryItemLocationsList",
        "siteCategoryList" => "SiteCategoryList",
        "binNumberList" => "InventoryItemBinNumberList",
        "translationsList" => "TranslationList",
        "presentationItemList" => "PresentationItemList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
