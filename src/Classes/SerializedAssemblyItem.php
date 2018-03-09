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

class SerializedAssemblyItem extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $customForm;
    public $itemId;
    public $upcCode;
    public $displayName;
    public $vendorName;
    public $parent;
    public $printItems;
    public $isOnline;
    public $lastInvtCountDate;
    public $nextInvtCountDate;
    public $invtCountInterval;
    public $invtClassification;
    public $isGcoCompliant;
    public $offerSupport;
    public $useComponentYield;
    public $isInactive;
    public $subsidiaryList;
    public $availableToPartners;
    public $includeChildren;
    public $department;
    public $class;
    public $location;
    public $description;
    public $cogsAccount;
    public $vendor;
    public $incomeAccount;
    public $intercoIncomeAccount;
    public $assetAccount;
    public $matchBillToReceipt;
    public $billQtyVarianceAcct;
    public $billPriceVarianceAcct;
    public $billExchRateVarianceAcct;
    public $gainLossAccount;
    public $salesTaxCode;
    public $costCategory;
    public $purchaseTaxCode;
    public $prodQtyVarianceAcct;
    public $prodPriceVarianceAcct;
    public $purchasePriceVarianceAcct;
    public $wipVarianceAcct;
    public $taxSchedule;
    public $scrapAcct;
    public $shippingCost;
    public $wipAcct;
    public $shippingCostUnits;
    public $handlingCost;
    public $weight;
    public $handlingCostUnits;
    public $weightUnit;
    public $weightUnits;
    public $costingMethod;
    public $isTaxable;
    public $costingMethodDisplay;
    public $rate;
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
    public $minimumQuantityUnits;
    public $defaultRevision;
    public $defaultItemShipMethod;
    public $itemCarrier;
    public $roundUpAsComponent;
    public $purchaseOrderQuantity;
    public $purchaseOrderAmount;
    public $purchaseOrderQuantityDiff;
    public $receiptQuantity;
    public $receiptAmount;
    public $receiptQuantityDiff;
    public $isDropShipItem;
    public $isPhantom;
    public $itemShipMethodList;
    public $manufacturerTaxId;
    public $scheduleBNumber;
    public $scheduleBQuantity;
    public $scheduleBCode;
    public $manufacturerTariff;
    public $preferenceCriterion;
    public $issueProduct;
    public $minimumQuantity;
    public $enforceMinQtyInternally;
    public $softDescriptor;
    public $isSpecialWorkOrderItem;
    public $pricesIncludeTax;
    public $quantityPricingSchedule;
    public $buildEntireAssembly;
    public $quantityOnHand;
    public $quantityOnHandUnits;
    public $useMarginalRates;
    public $reorderMultiple;
    public $cost;
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
    public $lastPurchasePrice;
    public $purchaseDescription;
    public $leadTime;
    public $autoLeadTime;
    public $buildTime;
    public $safetyStockLevel;
    public $safetyStockLevelUnits;
    public $safetyStockLevelDays;
    public $seasonalDemand;
    public $serialNumbers;
    public $reorderPoint;
    public $reorderPointUnits;
    public $preferredStockLevel;
    public $preferredStockLevelUnits;
    public $demandModifier;
    public $autoReorderPoint;
    public $autoPreferredStockLevel;
    public $preferredStockLevelDays;
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
    public $shipIndividually;
    public $quantityCommitted;
    public $quantityAvailable;
    public $quantityBackOrdered;
    public $quantityOnOrder;
    public $shipPackage;
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
    public $urlComponent;
    public $searchKeywords;
    public $isDonationItem;
    public $showDefaultDonationAmount;
    public $maxDonationAmount;
    public $dontShowPrice;
    public $noPriceMessage;
    public $shoppingDotComCategory;
    public $shopzillaCategoryId;
    public $outOfStockMessage;
    public $nexTagCategory;
    public $outOfStockBehavior;
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
    public $numbersList;
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
        "isOnline" => "boolean",
        "lastInvtCountDate" => "dateTime",
        "nextInvtCountDate" => "dateTime",
        "invtCountInterval" => "integer",
        "invtClassification" => "ItemInvtClassification",
        "isGcoCompliant" => "boolean",
        "offerSupport" => "boolean",
        "useComponentYield" => "boolean",
        "isInactive" => "boolean",
        "subsidiaryList" => "RecordRefList",
        "availableToPartners" => "boolean",
        "includeChildren" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "description" => "string",
        "cogsAccount" => "RecordRef",
        "vendor" => "RecordRef",
        "incomeAccount" => "RecordRef",
        "intercoIncomeAccount" => "RecordRef",
        "assetAccount" => "RecordRef",
        "matchBillToReceipt" => "boolean",
        "billQtyVarianceAcct" => "RecordRef",
        "billPriceVarianceAcct" => "RecordRef",
        "billExchRateVarianceAcct" => "RecordRef",
        "gainLossAccount" => "RecordRef",
        "salesTaxCode" => "RecordRef",
        "costCategory" => "RecordRef",
        "purchaseTaxCode" => "RecordRef",
        "prodQtyVarianceAcct" => "RecordRef",
        "prodPriceVarianceAcct" => "RecordRef",
        "purchasePriceVarianceAcct" => "RecordRef",
        "wipVarianceAcct" => "RecordRef",
        "taxSchedule" => "RecordRef",
        "scrapAcct" => "RecordRef",
        "shippingCost" => "float",
        "wipAcct" => "RecordRef",
        "shippingCostUnits" => "string",
        "handlingCost" => "float",
        "weight" => "float",
        "handlingCostUnits" => "string",
        "weightUnit" => "ItemWeightUnit",
        "weightUnits" => "string",
        "costingMethod" => "ItemCostingMethod",
        "isTaxable" => "boolean",
        "costingMethodDisplay" => "string",
        "rate" => "float",
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
        "minimumQuantityUnits" => "string",
        "defaultRevision" => "string",
        "defaultItemShipMethod" => "RecordRef",
        "itemCarrier" => "ShippingCarrier",
        "roundUpAsComponent" => "boolean",
        "purchaseOrderQuantity" => "float",
        "purchaseOrderAmount" => "float",
        "purchaseOrderQuantityDiff" => "float",
        "receiptQuantity" => "float",
        "receiptAmount" => "float",
        "receiptQuantityDiff" => "float",
        "isDropShipItem" => "boolean",
        "isPhantom" => "boolean",
        "itemShipMethodList" => "RecordRefList",
        "manufacturerTaxId" => "string",
        "scheduleBNumber" => "string",
        "scheduleBQuantity" => "integer",
        "scheduleBCode" => "RecordRef",
        "manufacturerTariff" => "string",
        "preferenceCriterion" => "ItemPreferenceCriterion",
        "issueProduct" => "RecordRef",
        "minimumQuantity" => "integer",
        "enforceMinQtyInternally" => "boolean",
        "softDescriptor" => "RecordRef",
        "isSpecialWorkOrderItem" => "boolean",
        "pricesIncludeTax" => "boolean",
        "quantityPricingSchedule" => "RecordRef",
        "buildEntireAssembly" => "boolean",
        "quantityOnHand" => "float",
        "quantityOnHandUnits" => "string",
        "useMarginalRates" => "boolean",
        "reorderMultiple" => "integer",
        "cost" => "float",
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
        "lastPurchasePrice" => "float",
        "purchaseDescription" => "string",
        "leadTime" => "integer",
        "autoLeadTime" => "boolean",
        "buildTime" => "integer",
        "safetyStockLevel" => "float",
        "safetyStockLevelUnits" => "string",
        "safetyStockLevelDays" => "integer",
        "seasonalDemand" => "boolean",
        "serialNumbers" => "string",
        "reorderPoint" => "float",
        "reorderPointUnits" => "string",
        "preferredStockLevel" => "float",
        "preferredStockLevelUnits" => "string",
        "demandModifier" => "float",
        "autoReorderPoint" => "boolean",
        "autoPreferredStockLevel" => "boolean",
        "preferredStockLevelDays" => "float",
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
        "shipIndividually" => "boolean",
        "quantityCommitted" => "float",
        "quantityAvailable" => "float",
        "quantityBackOrdered" => "float",
        "quantityOnOrder" => "float",
        "shipPackage" => "RecordRef",
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
        "urlComponent" => "string",
        "searchKeywords" => "string",
        "isDonationItem" => "boolean",
        "showDefaultDonationAmount" => "boolean",
        "maxDonationAmount" => "float",
        "dontShowPrice" => "boolean",
        "noPriceMessage" => "string",
        "shoppingDotComCategory" => "string",
        "shopzillaCategoryId" => "integer",
        "outOfStockMessage" => "string",
        "nexTagCategory" => "string",
        "outOfStockBehavior" => "ItemOutOfStockBehavior",
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
        "locationsList" => "SerializedInventoryItemLocationsList",
        "siteCategoryList" => "SiteCategoryList",
        "binNumberList" => "InventoryItemBinNumberList",
        "numbersList" => "SerializedInventoryItemNumbersList",
        "translationsList" => "TranslationList",
        "presentationItemList" => "PresentationItemList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
