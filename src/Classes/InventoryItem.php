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

class InventoryItem extends Record {
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var string
     */
    public $purchaseDescription;
    /**
     * @var boolean
     */
    public $copyDescription;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $expenseAccount;
    /**
     * @var string
     */
    public $dateConvertedToInv;
    /**
     * @var \NetSuite\Classes\ItemType
     */
    public $originalItemType;
    /**
     * @var \NetSuite\Classes\ItemSubType
     */
    public $originalItemSubtype;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $cogsAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $intercoCogsAccount;
    /**
     * @var string
     */
    public $salesDescription;
    /**
     * @var \NetSuite\Classes\InventoryItemFraudRisk
     */
    public $fraudRisk;
    /**
     * @var boolean
     */
    public $includeChildren;
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
    public $taxSchedule;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $dropshipExpenseAccount;
    /**
     * @var boolean
     */
    public $deferRevRec;
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
    public $contingentRevenueHandling;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $revReclassFXAccount;
    /**
     * @var boolean
     */
    public $isTaxable;
    /**
     * @var \NetSuite\Classes\ItemMatrixType
     */
    public $matrixType;
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
     * @var string
     */
    public $shippingCostUnits;
    /**
     * @var float
     */
    public $handlingCost;
    /**
     * @var string
     */
    public $handlingCostUnits;
    /**
     * @var float
     */
    public $weight;
    /**
     * @var \NetSuite\Classes\ItemWeightUnit
     */
    public $weightUnit;
    /**
     * @var string
     */
    public $weightUnits;
    /**
     * @var string
     */
    public $costingMethodDisplay;
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $issueProduct;
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $intercoDefRevAccount;
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $defaultItemShipMethod;
    /**
     * @var \NetSuite\Classes\ShippingCarrier
     */
    public $itemCarrier;
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
     * @var string
     */
    public $minimumQuantityUnits;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $softDescriptor;
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
     * @var string
     */
    public $reorderPointUnits;
    /**
     * @var boolean
     */
    public $useMarginalRates;
    /**
     * @var string
     */
    public $preferredStockLevelUnits;
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
     * @var float
     */
    public $vsoePrice;
    /**
     * @var \NetSuite\Classes\VsoeSopGroup
     */
    public $vsoeSopGroup;
    /**
     * @var string
     */
    public $costEstimateUnits;
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $preferredLocation;
    /**
     * @var boolean
     */
    public $isStorePickupAllowed;
    /**
     * @var integer
     */
    public $reorderMultiple;
    /**
     * @var float
     */
    public $cost;
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
     * @var string
     */
    public $costUnits;
    /**
     * @var float
     */
    public $totalValue;
    /**
     * @var float
     */
    public $averageCost;
    /**
     * @var boolean
     */
    public $useBins;
    /**
     * @var string
     */
    public $quantityReorderUnits;
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
     * @var string
     */
    public $safetyStockLevelUnits;
    /**
     * @var float
     */
    public $demandModifier;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $distributionNetwork;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $distributionCategory;
    /**
     * @var boolean
     */
    public $autoReorderPoint;
    /**
     * @var string
     */
    public $storeDisplayName;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $storeDisplayThumbnail;
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
    public $relatedItemsDescription;
    /**
     * @var string
     */
    public $specialsDescription;
    /**
     * @var string
     */
    public $featuredDescription;
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
     * @var string
     */
    public $urlComponent;
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
     * @var string
     */
    public $currency;
    /**
     * @var float
     */
    public $preferredStockLevel;
    /**
     * @var \NetSuite\Classes\PricingMatrix
     */
    public $pricingMatrix;
    /**
     * @var \NetSuite\Classes\InventoryItemHierarchyVersionsList
     */
    public $hierarchyVersionsList;
    /**
     * @var \NetSuite\Classes\ItemAccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $purchaseTaxCode;
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
    public $quantityBackOrdered;
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
    public $quantityOnHand;
    /**
     * @var float
     */
    public $onHandValueMli;
    /**
     * @var float
     */
    public $quantityOnOrder;
    /**
     * @var float
     */
    public $rate;
    /**
     * @var float
     */
    public $reorderPoint;
    /**
     * @var string
     */
    public $quantityCommittedUnits;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesTaxCode;
    /**
     * @var string
     */
    public $quantityAvailableUnits;
    /**
     * @var string
     */
    public $quantityOnHandUnits;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $vendor;
    /**
     * @var string
     */
    public $quantityOnOrderUnits;
    /**
     * @var \NetSuite\Classes\ProductFeedList
     */
    public $productFeedList;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var \NetSuite\Classes\ItemOptionsList
     */
    public $itemOptionsList;
    /**
     * @var \NetSuite\Classes\ItemVendorList
     */
    public $itemVendorList;
    /**
     * @var \NetSuite\Classes\SiteCategoryList
     */
    public $siteCategoryList;
    /**
     * @var \NetSuite\Classes\TranslationList
     */
    public $translationsList;
    /**
     * @var \NetSuite\Classes\InventoryItemBinNumberList
     */
    public $binNumberList;
    /**
     * @var \NetSuite\Classes\InventoryItemLocationsList
     */
    public $locationsList;
    /**
     * @var \NetSuite\Classes\MatrixOptionList
     */
    public $matrixOptionList;
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
        "createRevenuePlansOn" => "RecordRef",
        "directRevenuePosting" => "boolean",
        "contingentRevenueHandling" => "boolean",
        "revReclassFXAccount" => "RecordRef",
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
        "intercoDefRevAccount" => "RecordRef",
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
        "maximumQuantity" => "integer",
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
        "hierarchyVersionsList" => "InventoryItemHierarchyVersionsList",
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
