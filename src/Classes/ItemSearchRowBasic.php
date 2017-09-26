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

class ItemSearchRowBasic extends SearchRowBasic {
    public $accountingBook;
    public $accountingBookAmortization;
    public $accountingBookRevRecSchedule;
    public $allowedShippingMethod;
    public $alternateDemandSourceItem;
    public $assetAccount;
    public $atpLeadTime;
    public $atpMethod;
    public $autoLeadTime;
    public $autoPreferredStockLevel;
    public $autoReorderPoint;
    public $availableToPartners;
    public $averageCost;
    public $backwardConsumptionDays;
    public $basePrice;
    public $billExchRateVarianceAcct;
    public $billPriceVarianceAcct;
    public $billQtyVarianceAcct;
    public $binNumber;
    public $binOnHandAvail;
    public $binOnHandCount;
    public $bomQuantity;
    public $buildEntireAssembly;
    public $buildTime;
    public $buyItNowPrice;
    public $category;
    public $categoryPreferred;
    public $class;
    public $componentYield;
    public $copyDescription;
    public $correlatedItem;
    public $correlatedItemCorrelation;
    public $correlatedItemCount;
    public $correlatedItemLift;
    public $correlatedItemPurchaseRate;
    public $cost;
    public $costAccountingStatus;
    public $costCategory;
    public $costEstimate;
    public $costEstimateType;
    public $costingMethod;
    public $countryOfManufacture;
    public $created;
    public $createJob;
    public $createRevenuePlansOn;
    public $custReturnVarianceAccount;
    public $dateViewed;
    public $daysBeforeExpiration;
    public $defaultReturnCost;
    public $defaultShippingMethod;
    public $deferredExpenseAccount;
    public $deferredRevenueAccount;
    public $deferRevRec;
    public $demandModifier;
    public $demandSource;
    public $demandTimeFence;
    public $department;
    public $departmentnohierarchy;
    public $directRevenuePosting;
    public $displayIneBayStore;
    public $displayName;
    public $distributionCategory;
    public $distributionNetwork;
    public $dontShowPrice;
    public $eBayItemDescription;
    public $eBayItemSubtitle;
    public $eBayItemTitle;
    public $ebayRelistingOption;
    public $effectiveBomControl;
    public $effectiveDate;
    public $effectiveRevision;
    public $endAuctionsWhenOutOfStock;
    public $excludeFromSitemap;
    public $expenseAccount;
    public $externalId;
    public $featuredDescription;
    public $feedDescription;
    public $feedName;
    public $fixedLotSize;
    public $forwardConsumptionDays;
    public $fraudRisk;
    public $froogleProductFeed;
    public $fxCost;
    public $gainLossAccount;
    public $generateAccruals;
    public $giftCertAuthCode;
    public $giftCertEmail;
    public $giftCertExpirationDate;
    public $giftCertFrom;
    public $giftCertMessage;
    public $giftCertOriginalAmount;
    public $giftCertRecipient;
    public $hits;
    public $imageUrl;
    public $includeChildren;
    public $incomeAccount;
    public $intercoExpenseAccount;
    public $intercoIncomeAccount;
    public $internalId;
    public $inventoryLocation;
    public $invtClassification;
    public $invtCountInterval;
    public $isAvailable;
    public $isDropShipItem;
    public $isFulfillable;
    public $isGcoCompliant;
    public $isInactive;
    public $isLotItem;
    public $isOnline;
    public $isSerialItem;
    public $isSpecialOrderItem;
    public $isSpecialWorkOrderItem;
    public $isStorePickupAllowed;
    public $issueProduct;
    public $isTaxable;
    public $isVsoeBundle;
    public $isWip;
    public $itemId;
    public $itemRevenueCategory;
    public $itemUrl;
    public $lastInvtCountDate;
    public $lastPurchasePrice;
    public $lastQuantityAvailableChange;
    public $leadTime;
    public $liabilityAccount;
    public $listingDuration;
    public $location;
    public $locationAllowStorePickup;
    public $locationAtpLeadTime;
    public $locationAverageCost;
    public $locationBinQuantityAvailable;
    public $locationBuildTime;
    public $locationCost;
    public $locationCostAccountingStatus;
    public $locationDefaultReturnCost;
    public $locationDemandSource;
    public $locationDemandTimeFence;
    public $locationFixedLotSize;
    public $locationInventoryCostTemplate;
    public $locationInvtClassification;
    public $locationInvtCountInterval;
    public $locationLastInvtCountDate;
    public $locationLeadTime;
    public $locationNextInvtCountDate;
    public $locationPeriodicLotSizeDays;
    public $locationPeriodicLotSizeType;
    public $locationPreferredStockLevel;
    public $locationQtyAvailForStorePickup;
    public $locationQuantityAvailable;
    public $locationQuantityBackOrdered;
    public $locationQuantityCommitted;
    public $locationQuantityInTransit;
    public $locationQuantityOnHand;
    public $locationQuantityOnOrder;
    public $locationReOrderPoint;
    public $locationRescheduleInDays;
    public $locationRescheduleOutDays;
    public $locationSafetyStockLevel;
    public $locationSupplyLotSizingMethod;
    public $locationSupplyTimeFence;
    public $locationSupplyType;
    public $locationTotalValue;
    public $locBackwardConsumptionDays;
    public $locForwardConsumptionDays;
    public $manufacturer;
    public $manufacturerAddr1;
    public $manufacturerCity;
    public $manufacturerState;
    public $manufacturerTariff;
    public $manufacturerTaxId;
    public $manufacturerZip;
    public $manufacturingChargeItem;
    public $matchBillToReceipt;
    public $memberItem;
    public $memberQuantity;
    public $metaTagHtml;
    public $minimumQuantity;
    public $modified;
    public $mossApplies;
    public $mpn;
    public $multManufactureAddr;
    public $nextagCategory;
    public $nextagProductFeed;
    public $nextInvtCountDate;
    public $noPriceMessage;
    public $numActiveListings;
    public $numberAllowedDownloads;
    public $numCurrentlyListed;
    public $obsoleteDate;
    public $obsoleteRevision;
    public $offerSupport;
    public $onlineCustomerPrice;
    public $onlinePrice;
    public $onSpecial;
    public $otherPrices;
    public $otherVendor;
    public $outOfStockBehavior;
    public $outOfStockMessage;
    public $overallQuantityPricingType;
    public $overheadType;
    public $pageTitle;
    public $parent;
    public $periodicLotSizeDays;
    public $periodicLotSizeType;
    public $preferenceCriterion;
    public $preferredBin;
    public $preferredLocation;
    public $preferredStockLevel;
    public $preferredStockLevelDays;
    public $pricesIncludeTax;
    public $pricingGroup;
    public $primaryCategory;
    public $prodPriceVarianceAcct;
    public $prodQtyVarianceAcct;
    public $purchaseDescription;
    public $purchaseOrderAmount;
    public $purchaseOrderQuantity;
    public $purchaseOrderQuantityDiff;
    public $purchasePriceVarianceAcct;
    public $purchaseUnit;
    public $quantityAvailable;
    public $quantityBackOrdered;
    public $quantityCommitted;
    public $quantityOnHand;
    public $quantityOnOrder;
    public $quantityPricingSchedule;
    public $receiptAmount;
    public $receiptQuantity;
    public $receiptQuantityDiff;
    public $reorderMultiple;
    public $reOrderPoint;
    public $rescheduleInDays;
    public $rescheduleOutDays;
    public $reservePrice;
    public $revenueAllocationGroup;
    public $revenueRecognitionRule;
    public $revRecForecastRule;
    public $revRecSchedule;
    public $roundUpAsComponent;
    public $safetyStockLevel;
    public $safetyStockLevelDays;
    public $salesDescription;
    public $salesTaxCode;
    public $saleUnit;
    public $sameAsPrimaryBookAmortization;
    public $sameAsPrimaryBookRevRec;
    public $scheduleBCode;
    public $scheduleBNumber;
    public $scheduleBQuantity;
    public $scrapAcct;
    public $searchKeywords;
    public $seasonalDemand;
    public $sellOnEBay;
    public $serialNumber;
    public $serialNumberLocation;
    public $shipIndividually;
    public $shipPackage;
    public $shippingCarrier;
    public $shippingRate;
    public $shoppingDotComCategory;
    public $shoppingProductFeed;
    public $shopzillaCategoryId;
    public $shopzillaProductFeed;
    public $sitemapPriority;
    public $softDescriptor;
    public $startingPrice;
    public $stockDescription;
    public $stockUnit;
    public $storeDescription;
    public $storeDetailedDescription;
    public $storeDisplayImage;
    public $storeDisplayName;
    public $storeDisplayThumbnail;
    public $subsidiary;
    public $subType;
    public $supplyLotSizingMethod;
    public $supplyReplenishmentMethod;
    public $supplyTimeFence;
    public $supplyType;
    public $taxSchedule;
    public $thumbNailUrl;
    public $totalValue;
    public $trackLandedCost;
    public $transferPrice;
    public $type;
    public $unbuildVarianceAccount;
    public $unitsType;
    public $upcCode;
    public $urlComponent;
    public $useBins;
    public $useComponentYield;
    public $useMarginalRates;
    public $vendor;
    public $vendorCode;
    public $vendorCost;
    public $vendorCostEntered;
    public $vendorName;
    public $vendorPriceCurrency;
    public $vendorSchedule;
    public $vendReturnVarianceAccount;
    public $vsoeDeferral;
    public $vsoeDelivered;
    public $vsoePermitDiscount;
    public $vsoePrice;
    public $webSite;
    public $weight;
    public $weightUnit;
    public $wipAcct;
    public $wipVarianceAcct;
    public $yahooProductFeed;
    public $customFieldList;
    static $paramtypesmap = array(
        "accountingBook" => "SearchColumnSelectField[]",
        "accountingBookAmortization" => "SearchColumnSelectField[]",
        "accountingBookRevRecSchedule" => "SearchColumnSelectField[]",
        "allowedShippingMethod" => "SearchColumnSelectField[]",
        "alternateDemandSourceItem" => "SearchColumnStringField[]",
        "assetAccount" => "SearchColumnSelectField[]",
        "atpLeadTime" => "SearchColumnDoubleField[]",
        "atpMethod" => "SearchColumnEnumSelectField[]",
        "autoLeadTime" => "SearchColumnBooleanField[]",
        "autoPreferredStockLevel" => "SearchColumnBooleanField[]",
        "autoReorderPoint" => "SearchColumnBooleanField[]",
        "availableToPartners" => "SearchColumnBooleanField[]",
        "averageCost" => "SearchColumnDoubleField[]",
        "backwardConsumptionDays" => "SearchColumnLongField[]",
        "basePrice" => "SearchColumnDoubleField[]",
        "billExchRateVarianceAcct" => "SearchColumnSelectField[]",
        "billPriceVarianceAcct" => "SearchColumnSelectField[]",
        "billQtyVarianceAcct" => "SearchColumnSelectField[]",
        "binNumber" => "SearchColumnStringField[]",
        "binOnHandAvail" => "SearchColumnDoubleField[]",
        "binOnHandCount" => "SearchColumnDoubleField[]",
        "bomQuantity" => "SearchColumnDoubleField[]",
        "buildEntireAssembly" => "SearchColumnBooleanField[]",
        "buildTime" => "SearchColumnDoubleField[]",
        "buyItNowPrice" => "SearchColumnDoubleField[]",
        "category" => "SearchColumnStringField[]",
        "categoryPreferred" => "SearchColumnStringField[]",
        "class" => "SearchColumnSelectField[]",
        "componentYield" => "SearchColumnDoubleField[]",
        "copyDescription" => "SearchColumnBooleanField[]",
        "correlatedItem" => "SearchColumnSelectField[]",
        "correlatedItemCorrelation" => "SearchColumnDoubleField[]",
        "correlatedItemCount" => "SearchColumnLongField[]",
        "correlatedItemLift" => "SearchColumnDoubleField[]",
        "correlatedItemPurchaseRate" => "SearchColumnDoubleField[]",
        "cost" => "SearchColumnDoubleField[]",
        "costAccountingStatus" => "SearchColumnEnumSelectField[]",
        "costCategory" => "SearchColumnStringField[]",
        "costEstimate" => "SearchColumnDoubleField[]",
        "costEstimateType" => "SearchColumnEnumSelectField[]",
        "costingMethod" => "SearchColumnEnumSelectField[]",
        "countryOfManufacture" => "SearchColumnEnumSelectField[]",
        "created" => "SearchColumnDateField[]",
        "createJob" => "SearchColumnBooleanField[]",
        "createRevenuePlansOn" => "SearchColumnEnumSelectField[]",
        "custReturnVarianceAccount" => "SearchColumnSelectField[]",
        "dateViewed" => "SearchColumnDateField[]",
        "daysBeforeExpiration" => "SearchColumnStringField[]",
        "defaultReturnCost" => "SearchColumnDoubleField[]",
        "defaultShippingMethod" => "SearchColumnStringField[]",
        "deferredExpenseAccount" => "SearchColumnSelectField[]",
        "deferredRevenueAccount" => "SearchColumnSelectField[]",
        "deferRevRec" => "SearchColumnBooleanField[]",
        "demandModifier" => "SearchColumnDoubleField[]",
        "demandSource" => "SearchColumnEnumSelectField[]",
        "demandTimeFence" => "SearchColumnLongField[]",
        "department" => "SearchColumnSelectField[]",
        "departmentnohierarchy" => "SearchColumnSelectField[]",
        "directRevenuePosting" => "SearchColumnBooleanField[]",
        "displayIneBayStore" => "SearchColumnBooleanField[]",
        "displayName" => "SearchColumnStringField[]",
        "distributionCategory" => "SearchColumnSelectField[]",
        "distributionNetwork" => "SearchColumnSelectField[]",
        "dontShowPrice" => "SearchColumnBooleanField[]",
        "eBayItemDescription" => "SearchColumnStringField[]",
        "eBayItemSubtitle" => "SearchColumnStringField[]",
        "eBayItemTitle" => "SearchColumnStringField[]",
        "ebayRelistingOption" => "SearchColumnEnumSelectField[]",
        "effectiveBomControl" => "SearchColumnEnumSelectField[]",
        "effectiveDate" => "SearchColumnDateField[]",
        "effectiveRevision" => "SearchColumnSelectField[]",
        "endAuctionsWhenOutOfStock" => "SearchColumnBooleanField[]",
        "excludeFromSitemap" => "SearchColumnBooleanField[]",
        "expenseAccount" => "SearchColumnSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "featuredDescription" => "SearchColumnStringField[]",
        "feedDescription" => "SearchColumnStringField[]",
        "feedName" => "SearchColumnStringField[]",
        "fixedLotSize" => "SearchColumnDoubleField[]",
        "forwardConsumptionDays" => "SearchColumnLongField[]",
        "fraudRisk" => "SearchColumnEnumSelectField[]",
        "froogleProductFeed" => "SearchColumnBooleanField[]",
        "fxCost" => "SearchColumnDoubleField[]",
        "gainLossAccount" => "SearchColumnSelectField[]",
        "generateAccruals" => "SearchColumnBooleanField[]",
        "giftCertAuthCode" => "SearchColumnStringField[]",
        "giftCertEmail" => "SearchColumnStringField[]",
        "giftCertExpirationDate" => "SearchColumnStringField[]",
        "giftCertFrom" => "SearchColumnStringField[]",
        "giftCertMessage" => "SearchColumnStringField[]",
        "giftCertOriginalAmount" => "SearchColumnStringField[]",
        "giftCertRecipient" => "SearchColumnStringField[]",
        "hits" => "SearchColumnLongField[]",
        "imageUrl" => "SearchColumnStringField[]",
        "includeChildren" => "SearchColumnBooleanField[]",
        "incomeAccount" => "SearchColumnSelectField[]",
        "intercoExpenseAccount" => "SearchColumnSelectField[]",
        "intercoIncomeAccount" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "inventoryLocation" => "SearchColumnSelectField[]",
        "invtClassification" => "SearchColumnEnumSelectField[]",
        "invtCountInterval" => "SearchColumnLongField[]",
        "isAvailable" => "SearchColumnBooleanField[]",
        "isDropShipItem" => "SearchColumnBooleanField[]",
        "isFulfillable" => "SearchColumnBooleanField[]",
        "isGcoCompliant" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isLotItem" => "SearchColumnBooleanField[]",
        "isOnline" => "SearchColumnBooleanField[]",
        "isSerialItem" => "SearchColumnBooleanField[]",
        "isSpecialOrderItem" => "SearchColumnBooleanField[]",
        "isSpecialWorkOrderItem" => "SearchColumnBooleanField[]",
        "isStorePickupAllowed" => "SearchColumnBooleanField[]",
        "issueProduct" => "SearchColumnSelectField[]",
        "isTaxable" => "SearchColumnBooleanField[]",
        "isVsoeBundle" => "SearchColumnBooleanField[]",
        "isWip" => "SearchColumnBooleanField[]",
        "itemId" => "SearchColumnStringField[]",
        "itemRevenueCategory" => "SearchColumnSelectField[]",
        "itemUrl" => "SearchColumnStringField[]",
        "lastInvtCountDate" => "SearchColumnDateField[]",
        "lastPurchasePrice" => "SearchColumnDoubleField[]",
        "lastQuantityAvailableChange" => "SearchColumnDateField[]",
        "leadTime" => "SearchColumnLongField[]",
        "liabilityAccount" => "SearchColumnSelectField[]",
        "listingDuration" => "SearchColumnEnumSelectField[]",
        "location" => "SearchColumnSelectField[]",
        "locationAllowStorePickup" => "SearchColumnBooleanField[]",
        "locationAtpLeadTime" => "SearchColumnDoubleField[]",
        "locationAverageCost" => "SearchColumnDoubleField[]",
        "locationBinQuantityAvailable" => "SearchColumnStringField[]",
        "locationBuildTime" => "SearchColumnDoubleField[]",
        "locationCost" => "SearchColumnDoubleField[]",
        "locationCostAccountingStatus" => "SearchColumnEnumSelectField[]",
        "locationDefaultReturnCost" => "SearchColumnDoubleField[]",
        "locationDemandSource" => "SearchColumnEnumSelectField[]",
        "locationDemandTimeFence" => "SearchColumnLongField[]",
        "locationFixedLotSize" => "SearchColumnDoubleField[]",
        "locationInventoryCostTemplate" => "SearchColumnStringField[]",
        "locationInvtClassification" => "SearchColumnEnumSelectField[]",
        "locationInvtCountInterval" => "SearchColumnLongField[]",
        "locationLastInvtCountDate" => "SearchColumnDateField[]",
        "locationLeadTime" => "SearchColumnLongField[]",
        "locationNextInvtCountDate" => "SearchColumnDateField[]",
        "locationPeriodicLotSizeDays" => "SearchColumnLongField[]",
        "locationPeriodicLotSizeType" => "SearchColumnEnumSelectField[]",
        "locationPreferredStockLevel" => "SearchColumnDoubleField[]",
        "locationQtyAvailForStorePickup" => "SearchColumnDoubleField[]",
        "locationQuantityAvailable" => "SearchColumnDoubleField[]",
        "locationQuantityBackOrdered" => "SearchColumnDoubleField[]",
        "locationQuantityCommitted" => "SearchColumnDoubleField[]",
        "locationQuantityInTransit" => "SearchColumnDoubleField[]",
        "locationQuantityOnHand" => "SearchColumnDoubleField[]",
        "locationQuantityOnOrder" => "SearchColumnDoubleField[]",
        "locationReOrderPoint" => "SearchColumnDoubleField[]",
        "locationRescheduleInDays" => "SearchColumnLongField[]",
        "locationRescheduleOutDays" => "SearchColumnLongField[]",
        "locationSafetyStockLevel" => "SearchColumnDoubleField[]",
        "locationSupplyLotSizingMethod" => "SearchColumnEnumSelectField[]",
        "locationSupplyTimeFence" => "SearchColumnLongField[]",
        "locationSupplyType" => "SearchColumnEnumSelectField[]",
        "locationTotalValue" => "SearchColumnDoubleField[]",
        "locBackwardConsumptionDays" => "SearchColumnLongField[]",
        "locForwardConsumptionDays" => "SearchColumnLongField[]",
        "manufacturer" => "SearchColumnStringField[]",
        "manufacturerAddr1" => "SearchColumnStringField[]",
        "manufacturerCity" => "SearchColumnStringField[]",
        "manufacturerState" => "SearchColumnStringField[]",
        "manufacturerTariff" => "SearchColumnStringField[]",
        "manufacturerTaxId" => "SearchColumnStringField[]",
        "manufacturerZip" => "SearchColumnStringField[]",
        "manufacturingChargeItem" => "SearchColumnBooleanField[]",
        "matchBillToReceipt" => "SearchColumnBooleanField[]",
        "memberItem" => "SearchColumnSelectField[]",
        "memberQuantity" => "SearchColumnDoubleField[]",
        "metaTagHtml" => "SearchColumnStringField[]",
        "minimumQuantity" => "SearchColumnStringField[]",
        "modified" => "SearchColumnDateField[]",
        "mossApplies" => "SearchColumnBooleanField[]",
        "mpn" => "SearchColumnStringField[]",
        "multManufactureAddr" => "SearchColumnBooleanField[]",
        "nextagCategory" => "SearchColumnStringField[]",
        "nextagProductFeed" => "SearchColumnBooleanField[]",
        "nextInvtCountDate" => "SearchColumnDateField[]",
        "noPriceMessage" => "SearchColumnStringField[]",
        "numActiveListings" => "SearchColumnLongField[]",
        "numberAllowedDownloads" => "SearchColumnStringField[]",
        "numCurrentlyListed" => "SearchColumnLongField[]",
        "obsoleteDate" => "SearchColumnDateField[]",
        "obsoleteRevision" => "SearchColumnSelectField[]",
        "offerSupport" => "SearchColumnBooleanField[]",
        "onlineCustomerPrice" => "SearchColumnDoubleField[]",
        "onlinePrice" => "SearchColumnDoubleField[]",
        "onSpecial" => "SearchColumnBooleanField[]",
        "otherPrices" => "SearchColumnDoubleField[]",
        "otherVendor" => "SearchColumnSelectField[]",
        "outOfStockBehavior" => "SearchColumnStringField[]",
        "outOfStockMessage" => "SearchColumnStringField[]",
        "overallQuantityPricingType" => "SearchColumnEnumSelectField[]",
        "overheadType" => "SearchColumnEnumSelectField[]",
        "pageTitle" => "SearchColumnStringField[]",
        "parent" => "SearchColumnSelectField[]",
        "periodicLotSizeDays" => "SearchColumnLongField[]",
        "periodicLotSizeType" => "SearchColumnEnumSelectField[]",
        "preferenceCriterion" => "SearchColumnStringField[]",
        "preferredBin" => "SearchColumnBooleanField[]",
        "preferredLocation" => "SearchColumnSelectField[]",
        "preferredStockLevel" => "SearchColumnDoubleField[]",
        "preferredStockLevelDays" => "SearchColumnLongField[]",
        "pricesIncludeTax" => "SearchColumnBooleanField[]",
        "pricingGroup" => "SearchColumnSelectField[]",
        "primaryCategory" => "SearchColumnStringField[]",
        "prodPriceVarianceAcct" => "SearchColumnSelectField[]",
        "prodQtyVarianceAcct" => "SearchColumnSelectField[]",
        "purchaseDescription" => "SearchColumnStringField[]",
        "purchaseOrderAmount" => "SearchColumnDoubleField[]",
        "purchaseOrderQuantity" => "SearchColumnDoubleField[]",
        "purchaseOrderQuantityDiff" => "SearchColumnDoubleField[]",
        "purchasePriceVarianceAcct" => "SearchColumnSelectField[]",
        "purchaseUnit" => "SearchColumnSelectField[]",
        "quantityAvailable" => "SearchColumnDoubleField[]",
        "quantityBackOrdered" => "SearchColumnDoubleField[]",
        "quantityCommitted" => "SearchColumnDoubleField[]",
        "quantityOnHand" => "SearchColumnDoubleField[]",
        "quantityOnOrder" => "SearchColumnDoubleField[]",
        "quantityPricingSchedule" => "SearchColumnSelectField[]",
        "receiptAmount" => "SearchColumnDoubleField[]",
        "receiptQuantity" => "SearchColumnDoubleField[]",
        "receiptQuantityDiff" => "SearchColumnDoubleField[]",
        "reorderMultiple" => "SearchColumnLongField[]",
        "reOrderPoint" => "SearchColumnDoubleField[]",
        "rescheduleInDays" => "SearchColumnLongField[]",
        "rescheduleOutDays" => "SearchColumnLongField[]",
        "reservePrice" => "SearchColumnDoubleField[]",
        "revenueAllocationGroup" => "SearchColumnSelectField[]",
        "revenueRecognitionRule" => "SearchColumnSelectField[]",
        "revRecForecastRule" => "SearchColumnSelectField[]",
        "revRecSchedule" => "SearchColumnSelectField[]",
        "roundUpAsComponent" => "SearchColumnBooleanField[]",
        "safetyStockLevel" => "SearchColumnDoubleField[]",
        "safetyStockLevelDays" => "SearchColumnLongField[]",
        "salesDescription" => "SearchColumnStringField[]",
        "salesTaxCode" => "SearchColumnSelectField[]",
        "saleUnit" => "SearchColumnSelectField[]",
        "sameAsPrimaryBookAmortization" => "SearchColumnBooleanField[]",
        "sameAsPrimaryBookRevRec" => "SearchColumnBooleanField[]",
        "scheduleBCode" => "SearchColumnEnumSelectField[]",
        "scheduleBNumber" => "SearchColumnStringField[]",
        "scheduleBQuantity" => "SearchColumnStringField[]",
        "scrapAcct" => "SearchColumnSelectField[]",
        "searchKeywords" => "SearchColumnStringField[]",
        "seasonalDemand" => "SearchColumnBooleanField[]",
        "sellOnEBay" => "SearchColumnBooleanField[]",
        "serialNumber" => "SearchColumnStringField[]",
        "serialNumberLocation" => "SearchColumnStringField[]",
        "shipIndividually" => "SearchColumnBooleanField[]",
        "shipPackage" => "SearchColumnSelectField[]",
        "shippingCarrier" => "SearchColumnEnumSelectField[]",
        "shippingRate" => "SearchColumnDoubleField[]",
        "shoppingDotComCategory" => "SearchColumnStringField[]",
        "shoppingProductFeed" => "SearchColumnBooleanField[]",
        "shopzillaCategoryId" => "SearchColumnLongField[]",
        "shopzillaProductFeed" => "SearchColumnBooleanField[]",
        "sitemapPriority" => "SearchColumnEnumSelectField[]",
        "softDescriptor" => "SearchColumnSelectField[]",
        "startingPrice" => "SearchColumnDoubleField[]",
        "stockDescription" => "SearchColumnStringField[]",
        "stockUnit" => "SearchColumnSelectField[]",
        "storeDescription" => "SearchColumnStringField[]",
        "storeDetailedDescription" => "SearchColumnStringField[]",
        "storeDisplayImage" => "SearchColumnSelectField[]",
        "storeDisplayName" => "SearchColumnStringField[]",
        "storeDisplayThumbnail" => "SearchColumnSelectField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "subType" => "SearchColumnEnumSelectField[]",
        "supplyLotSizingMethod" => "SearchColumnEnumSelectField[]",
        "supplyReplenishmentMethod" => "SearchColumnEnumSelectField[]",
        "supplyTimeFence" => "SearchColumnLongField[]",
        "supplyType" => "SearchColumnEnumSelectField[]",
        "taxSchedule" => "SearchColumnSelectField[]",
        "thumbNailUrl" => "SearchColumnStringField[]",
        "totalValue" => "SearchColumnDoubleField[]",
        "trackLandedCost" => "SearchColumnBooleanField[]",
        "transferPrice" => "SearchColumnDoubleField[]",
        "type" => "SearchColumnEnumSelectField[]",
        "unbuildVarianceAccount" => "SearchColumnSelectField[]",
        "unitsType" => "SearchColumnSelectField[]",
        "upcCode" => "SearchColumnStringField[]",
        "urlComponent" => "SearchColumnStringField[]",
        "useBins" => "SearchColumnBooleanField[]",
        "useComponentYield" => "SearchColumnBooleanField[]",
        "useMarginalRates" => "SearchColumnBooleanField[]",
        "vendor" => "SearchColumnSelectField[]",
        "vendorCode" => "SearchColumnStringField[]",
        "vendorCost" => "SearchColumnDoubleField[]",
        "vendorCostEntered" => "SearchColumnDoubleField[]",
        "vendorName" => "SearchColumnStringField[]",
        "vendorPriceCurrency" => "SearchColumnStringField[]",
        "vendorSchedule" => "SearchColumnSelectField[]",
        "vendReturnVarianceAccount" => "SearchColumnSelectField[]",
        "vsoeDeferral" => "SearchColumnEnumSelectField[]",
        "vsoeDelivered" => "SearchColumnBooleanField[]",
        "vsoePermitDiscount" => "SearchColumnEnumSelectField[]",
        "vsoePrice" => "SearchColumnDoubleField[]",
        "webSite" => "SearchColumnSelectField[]",
        "weight" => "SearchColumnDoubleField[]",
        "weightUnit" => "SearchColumnEnumSelectField[]",
        "wipAcct" => "SearchColumnSelectField[]",
        "wipVarianceAcct" => "SearchColumnSelectField[]",
        "yahooProductFeed" => "SearchColumnBooleanField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
