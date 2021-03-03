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
 * generated:  2020-12-11 06:57:10 PM PST
 */

namespace NetSuite\Classes;

class LotNumberedInventoryItem extends Record {
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
    public $customForm;
    /**
     * @var string
     */
    public $itemId;
    /**
     * @var string
     */
    public $upcCode;
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var \NetSuite\Classes\ItemMatrixType
     */
    public $matrixType;
    /**
     * @var boolean
     */
    public $includeChildren;
    /**
     * @var string
     */
    public $vendorName;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $parent;
    /**
     * @var boolean
     */
    public $isOnline;
    /**
     * @var boolean
     */
    public $isHazmatItem;
    /**
     * @var string
     */
    public $hazmatId;
    /**
     * @var string
     */
    public $hazmatShippingName;
    /**
     * @var string
     */
    public $hazmatHazardClass;
    /**
     * @var \NetSuite\Classes\HazmatPackingGroup
     */
    public $hazmatPackingGroup;
    /**
     * @var string
     */
    public $hazmatItemUnits;
    /**
     * @var float
     */
    public $hazmatItemUnitsQty;
    /**
     * @var boolean
     */
    public $isGcoCompliant;
    /**
     * @var boolean
     */
    public $offerSupport;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var boolean
     */
    public $availableToPartners;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var \NetSuite\Classes\ItemCostingMethod
     */
    public $costingMethod;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var string
     */
    public $purchaseDescription;
    /**
     * @var boolean
     */
    public $copyDescription;
    /**
     * @var string
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $cogsAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $intercoCogsAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $vendor;
    /**
     * @var string
     */
    public $salesDescription;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $incomeAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $intercoIncomeAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $issueProduct;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxSchedule;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $dropshipExpenseAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $revenueRecognitionRule;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $revRecForecastRule;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $revenueAllocationGroup;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $createRevenuePlansOn;
    /**
     * @var boolean
     */
    public $directRevenuePosting;
    /**
     * @var boolean
     */
    public $isTaxable;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $assetAccount;
    /**
     * @var boolean
     */
    public $matchBillToReceipt;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billQtyVarianceAcct;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billPriceVarianceAcct;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billExchRateVarianceAcct;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $gainLossAccount;
    /**
     * @var float
     */
    public $shippingCost;
    /**
     * @var float
     */
    public $handlingCost;
    /**
     * @var float
     */
    public $weight;
    /**
     * @var string
     */
    public $costingMethodDisplay;
    /**
     * @var string
     */
    public $shippingCostUnits;
    /**
     * @var string
     */
    public $handlingCostUnits;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $unitsType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $stockUnit;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $purchaseUnit;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $saleUnit;
    /**
     * @var string
     */
    public $minimumQuantityUnits;
    /**
     * @var string
     */
    public $safetyStockLevelUnits;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billingSchedule;
    /**
     * @var boolean
     */
    public $trackLandedCost;
    /**
     * @var string
     */
    public $matrixItemNameTemplate;
    /**
     * @var boolean
     */
    public $isDropShipItem;
    /**
     * @var boolean
     */
    public $isSpecialOrderItem;
    /**
     * @var string
     */
    public $stockDescription;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $deferredRevenueAccount;
    /**
     * @var boolean
     */
    public $producer;
    /**
     * @var string
     */
    public $manufacturer;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $revRecSchedule;
    /**
     * @var string
     */
    public $mpn;
    /**
     * @var boolean
     */
    public $multManufactureAddr;
    /**
     * @var string
     */
    public $manufacturerAddr1;
    /**
     * @var string
     */
    public $manufacturerCity;
    /**
     * @var string
     */
    public $manufacturerState;
    /**
     * @var string
     */
    public $manufacturerZip;
    /**
     * @var \NetSuite\Classes\Country
     */
    public $countryOfManufacture;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $defaultItemShipMethod;
    /**
     * @var \NetSuite\Classes\ShippingCarrier
     */
    public $itemCarrier;
    /**
     * @var boolean
     */
    public $roundUpAsComponent;
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
     * @var \NetSuite\Classes\RecordRefList
     */
    public $itemShipMethodList;
    /**
     * @var string
     */
    public $manufacturerTaxId;
    /**
     * @var string
     */
    public $scheduleBNumber;
    /**
     * @var integer
     */
    public $scheduleBQuantity;
    /**
     * @var \NetSuite\Classes\ScheduleBCode
     */
    public $scheduleBCode;
    /**
     * @var string
     */
    public $manufacturerTariff;
    /**
     * @var \NetSuite\Classes\ItemPreferenceCriterion
     */
    public $preferenceCriterion;
    /**
     * @var integer
     */
    public $minimumQuantity;
    /**
     * @var boolean
     */
    public $enforceMinQtyInternally;
    /**
     * @var integer
     */
    public $maximumQuantity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shipPackage;
    /**
     * @var boolean
     */
    public $shipIndividually;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $softDescriptor;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $costCategory;
    /**
     * @var boolean
     */
    public $pricesIncludeTax;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $purchasePriceVarianceAcct;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $quantityPricingSchedule;
    /**
     * @var boolean
     */
    public $useMarginalRates;
    /**
     * @var \NetSuite\Classes\ItemCostEstimateType
     */
    public $costEstimateType;
    /**
     * @var float
     */
    public $costEstimate;
    /**
     * @var float
     */
    public $transferPrice;
    /**
     * @var \NetSuite\Classes\ItemOverallQuantityPricingType
     */
    public $overallQuantityPricingType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $pricingGroup;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $preferredLocation;
    /**
     * @var boolean
     */
    public $isStorePickupAllowed;
    /**
     * @var float
     */
    public $vsoePrice;
    /**
     * @var \NetSuite\Classes\VsoeSopGroup
     */
    public $vsoeSopGroup;
    /**
     * @var \NetSuite\Classes\VsoeDeferral
     */
    public $vsoeDeferral;
    /**
     * @var \NetSuite\Classes\VsoePermitDiscount
     */
    public $vsoePermitDiscount;
    /**
     * @var boolean
     */
    public $vsoeDelivered;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $itemRevenueCategory;
    /**
     * @var float
     */
    public $cost;
    /**
     * @var string
     */
    public $costUnits;
    /**
     * @var integer
     */
    public $reorderMultiple;
    /**
     * @var string
     */
    public $quantityReorderUnits;
    /**
     * @var float
     */
    public $totalValue;
    /**
     * @var boolean
     */
    public $useBins;
    /**
     * @var float
     */
    public $averageCost;
    /**
     * @var integer
     */
    public $leadTime;
    /**
     * @var boolean
     */
    public $autoLeadTime;
    /**
     * @var float
     */
    public $lastPurchasePrice;
    /**
     * @var boolean
     */
    public $autoReorderPoint;
    /**
     * @var boolean
     */
    public $autoPreferredStockLevel;
    /**
     * @var float
     */
    public $preferredStockLevelDays;
    /**
     * @var float
     */
    public $safetyStockLevel;
    /**
     * @var integer
     */
    public $safetyStockLevelDays;
    /**
     * @var integer
     */
    public $backwardConsumptionDays;
    /**
     * @var boolean
     */
    public $seasonalDemand;
    /**
     * @var float
     */
    public $demandModifier;
    /**
     * @var string
     */
    public $storeDisplayName;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $storeDisplayThumbnail;
    /**
     * @var \NetSuite\Classes\ItemWeightUnit
     */
    public $weightUnit;
    /**
     * @var string
     */
    public $weightUnits;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $storeDisplayImage;
    /**
     * @var string
     */
    public $storeDescription;
    /**
     * @var string
     */
    public $storeDetailedDescription;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $storeItemTemplate;
    /**
     * @var string
     */
    public $pageTitle;
    /**
     * @var string
     */
    public $metaTagHtml;
    /**
     * @var boolean
     */
    public $excludeFromSitemap;
    /**
     * @var \NetSuite\Classes\SitemapPriority
     */
    public $sitemapPriority;
    /**
     * @var string
     */
    public $searchKeywords;
    /**
     * @var boolean
     */
    public $isDonationItem;
    /**
     * @var boolean
     */
    public $showDefaultDonationAmount;
    /**
     * @var float
     */
    public $maxDonationAmount;
    /**
     * @var string
     */
    public $shoppingDotComCategory;
    /**
     * @var integer
     */
    public $shopzillaCategoryId;
    /**
     * @var string
     */
    public $nexTagCategory;
    /**
     * @var float
     */
    public $quantityOnHand;
    /**
     * @var string
     */
    public $quantityOnHandUnits;
    /**
     * @var string
     */
    public $expirationDate;
    /**
     * @var string
     */
    public $lastInvtCountDate;
    /**
     * @var string
     */
    public $nextInvtCountDate;
    /**
     * @var integer
     */
    public $invtCountInterval;
    /**
     * @var \NetSuite\Classes\ItemInvtClassification
     */
    public $invtClassification;
    /**
     * @var float
     */
    public $onHandValueMli;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var float
     */
    public $reorderPoint;
    /**
     * @var float
     */
    public $preferredStockLevel;
    /**
     * @var string
     */
    public $reorderPointUnits;
    /**
     * @var float
     */
    public $defaultReturnCost;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $supplyReplenishmentMethod;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $alternateDemandSourceItem;
    /**
     * @var float
     */
    public $fixedLotSize;
    /**
     * @var \NetSuite\Classes\PeriodicLotSizeType
     */
    public $periodicLotSizeType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $supplyType;
    /**
     * @var integer
     */
    public $demandTimeFence;
    /**
     * @var integer
     */
    public $supplyTimeFence;
    /**
     * @var integer
     */
    public $rescheduleInDays;
    /**
     * @var integer
     */
    public $rescheduleOutDays;
    /**
     * @var integer
     */
    public $periodicLotSizeDays;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $supplyLotSizingMethod;
    /**
     * @var integer
     */
    public $forwardConsumptionDays;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $demandSource;
    /**
     * @var float
     */
    public $quantityOnOrder;
    /**
     * @var string
     */
    public $preferredStockLevelUnits;
    /**
     * @var float
     */
    public $quantityCommitted;
    /**
     * @var float
     */
    public $quantityAvailable;
    /**
     * @var float
     */
    public $quantityBackOrdered;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $purchaseTaxCode;
    /**
     * @var float
     */
    public $rate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesTaxCode;
    /**
     * @var boolean
     */
    public $dontShowPrice;
    /**
     * @var string
     */
    public $noPriceMessage;
    /**
     * @var string
     */
    public $outOfStockMessage;
    /**
     * @var boolean
     */
    public $onSpecial;
    /**
     * @var \NetSuite\Classes\ItemOutOfStockBehavior
     */
    public $outOfStockBehavior;
    /**
     * @var string
     */
    public $specialsDescription;
    /**
     * @var string
     */
    public $relatedItemsDescription;
    /**
     * @var string
     */
    public $featuredDescription;
    /**
     * @var \NetSuite\Classes\ProductFeedList
     */
    public $productFeedList;
    /**
     * @var string
     */
    public $urlComponent;
    /**
     * @var \NetSuite\Classes\ItemOptionsList
     */
    public $itemOptionsList;
    /**
     * @var \NetSuite\Classes\MatrixOptionList
     */
    public $matrixOptionList;
    /**
     * @var \NetSuite\Classes\ItemVendorList
     */
    public $itemVendorList;
    /**
     * @var \NetSuite\Classes\PricingMatrix
     */
    public $pricingMatrix;
    /**
     * @var \NetSuite\Classes\LotNumberedInventoryItemHierarchyVersionsList
     */
    public $hierarchyVersionsList;
    /**
     * @var \NetSuite\Classes\ItemAccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $itemNumberOptionsList;
    /**
     * @var \NetSuite\Classes\LotNumberedInventoryItemNumbersList
     */
    public $numbersList;
    /**
     * @var \NetSuite\Classes\InventoryItemBinNumberList
     */
    public $binNumberList;
    /**
     * @var \NetSuite\Classes\SiteCategoryList
     */
    public $siteCategoryList;
    /**
     * @var \NetSuite\Classes\LotNumberedInventoryItemLocationsList
     */
    public $locationsList;
    /**
     * @var \NetSuite\Classes\TranslationList
     */
    public $translationsList;
    /**
     * @var \NetSuite\Classes\PresentationItemList
     */
    public $presentationItemList;
    /**
     * @var integer
     */
    public $futureHorizon;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $consumptionUnit;
    /**
     * @var boolean
     */
    public $enableCatchWeight;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $secondaryUnitsType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $secondaryBaseUnit;
    /**
     * @var float
     */
    public $conversionRate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $secondaryStockUnit;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $secondarySaleUnit;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $secondaryPurchaseUnit;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $secondaryConsumptionUnit;
    /**
     * @var float
     */
    public $lowerWarningLimit;
    /**
     * @var float
     */
    public $upperWarningLimit;
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
        "customForm" => "RecordRef",
        "itemId" => "string",
        "upcCode" => "string",
        "displayName" => "string",
        "matrixType" => "ItemMatrixType",
        "includeChildren" => "boolean",
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
        "subsidiaryList" => "RecordRefList",
        "purchaseDescription" => "string",
        "copyDescription" => "boolean",
        "currency" => "string",
        "cogsAccount" => "RecordRef",
        "intercoCogsAccount" => "RecordRef",
        "vendor" => "RecordRef",
        "salesDescription" => "string",
        "incomeAccount" => "RecordRef",
        "intercoIncomeAccount" => "RecordRef",
        "issueProduct" => "RecordRef",
        "taxSchedule" => "RecordRef",
        "dropshipExpenseAccount" => "RecordRef",
        "revenueRecognitionRule" => "RecordRef",
        "revRecForecastRule" => "RecordRef",
        "revenueAllocationGroup" => "RecordRef",
        "createRevenuePlansOn" => "RecordRef",
        "directRevenuePosting" => "boolean",
        "isTaxable" => "boolean",
        "assetAccount" => "RecordRef",
        "matchBillToReceipt" => "boolean",
        "billQtyVarianceAcct" => "RecordRef",
        "billPriceVarianceAcct" => "RecordRef",
        "billExchRateVarianceAcct" => "RecordRef",
        "gainLossAccount" => "RecordRef",
        "shippingCost" => "float",
        "handlingCost" => "float",
        "weight" => "float",
        "costingMethodDisplay" => "string",
        "shippingCostUnits" => "string",
        "handlingCostUnits" => "string",
        "unitsType" => "RecordRef",
        "stockUnit" => "RecordRef",
        "purchaseUnit" => "RecordRef",
        "saleUnit" => "RecordRef",
        "minimumQuantityUnits" => "string",
        "safetyStockLevelUnits" => "string",
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
        "defaultItemShipMethod" => "RecordRef",
        "itemCarrier" => "ShippingCarrier",
        "roundUpAsComponent" => "boolean",
        "purchaseOrderQuantity" => "float",
        "purchaseOrderAmount" => "float",
        "purchaseOrderQuantityDiff" => "float",
        "receiptQuantity" => "float",
        "receiptAmount" => "float",
        "receiptQuantityDiff" => "float",
        "itemShipMethodList" => "RecordRefList",
        "manufacturerTaxId" => "string",
        "scheduleBNumber" => "string",
        "scheduleBQuantity" => "integer",
        "scheduleBCode" => "ScheduleBCode",
        "manufacturerTariff" => "string",
        "preferenceCriterion" => "ItemPreferenceCriterion",
        "minimumQuantity" => "integer",
        "enforceMinQtyInternally" => "boolean",
        "maximumQuantity" => "integer",
        "shipPackage" => "RecordRef",
        "shipIndividually" => "boolean",
        "softDescriptor" => "RecordRef",
        "costCategory" => "RecordRef",
        "pricesIncludeTax" => "boolean",
        "purchasePriceVarianceAcct" => "RecordRef",
        "quantityPricingSchedule" => "RecordRef",
        "useMarginalRates" => "boolean",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "transferPrice" => "float",
        "overallQuantityPricingType" => "ItemOverallQuantityPricingType",
        "pricingGroup" => "RecordRef",
        "preferredLocation" => "RecordRef",
        "isStorePickupAllowed" => "boolean",
        "vsoePrice" => "float",
        "vsoeSopGroup" => "VsoeSopGroup",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "itemRevenueCategory" => "RecordRef",
        "cost" => "float",
        "costUnits" => "string",
        "reorderMultiple" => "integer",
        "quantityReorderUnits" => "string",
        "totalValue" => "float",
        "useBins" => "boolean",
        "averageCost" => "float",
        "leadTime" => "integer",
        "autoLeadTime" => "boolean",
        "lastPurchasePrice" => "float",
        "autoReorderPoint" => "boolean",
        "autoPreferredStockLevel" => "boolean",
        "preferredStockLevelDays" => "float",
        "safetyStockLevel" => "float",
        "safetyStockLevelDays" => "integer",
        "backwardConsumptionDays" => "integer",
        "seasonalDemand" => "boolean",
        "demandModifier" => "float",
        "storeDisplayName" => "string",
        "storeDisplayThumbnail" => "RecordRef",
        "weightUnit" => "ItemWeightUnit",
        "weightUnits" => "string",
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
        "shoppingDotComCategory" => "string",
        "shopzillaCategoryId" => "integer",
        "nexTagCategory" => "string",
        "quantityOnHand" => "float",
        "quantityOnHandUnits" => "string",
        "expirationDate" => "dateTime",
        "lastInvtCountDate" => "dateTime",
        "nextInvtCountDate" => "dateTime",
        "invtCountInterval" => "integer",
        "invtClassification" => "ItemInvtClassification",
        "onHandValueMli" => "float",
        "serialNumbers" => "string",
        "reorderPoint" => "float",
        "preferredStockLevel" => "float",
        "reorderPointUnits" => "string",
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
        "quantityOnOrder" => "float",
        "preferredStockLevelUnits" => "string",
        "quantityCommitted" => "float",
        "quantityAvailable" => "float",
        "quantityBackOrdered" => "float",
        "purchaseTaxCode" => "RecordRef",
        "rate" => "float",
        "salesTaxCode" => "RecordRef",
        "dontShowPrice" => "boolean",
        "noPriceMessage" => "string",
        "outOfStockMessage" => "string",
        "onSpecial" => "boolean",
        "outOfStockBehavior" => "ItemOutOfStockBehavior",
        "specialsDescription" => "string",
        "relatedItemsDescription" => "string",
        "featuredDescription" => "string",
        "productFeedList" => "ProductFeedList",
        "urlComponent" => "string",
        "itemOptionsList" => "ItemOptionsList",
        "matrixOptionList" => "MatrixOptionList",
        "itemVendorList" => "ItemVendorList",
        "pricingMatrix" => "PricingMatrix",
        "hierarchyVersionsList" => "LotNumberedInventoryItemHierarchyVersionsList",
        "accountingBookDetailList" => "ItemAccountingBookDetailList",
        "itemNumberOptionsList" => "RecordRefList",
        "numbersList" => "LotNumberedInventoryItemNumbersList",
        "binNumberList" => "InventoryItemBinNumberList",
        "siteCategoryList" => "SiteCategoryList",
        "locationsList" => "LotNumberedInventoryItemLocationsList",
        "translationsList" => "TranslationList",
        "presentationItemList" => "PresentationItemList",
        "futureHorizon" => "integer",
        "consumptionUnit" => "RecordRef",
        "enableCatchWeight" => "boolean",
        "secondaryUnitsType" => "RecordRef",
        "secondaryBaseUnit" => "RecordRef",
        "conversionRate" => "float",
        "secondaryStockUnit" => "RecordRef",
        "secondarySaleUnit" => "RecordRef",
        "secondaryPurchaseUnit" => "RecordRef",
        "secondaryConsumptionUnit" => "RecordRef",
        "lowerWarningLimit" => "float",
        "upperWarningLimit" => "float",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
