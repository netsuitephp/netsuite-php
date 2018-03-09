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

class ItemSearchBasic extends SearchRecordBasic {
    public $account;
    public $accountingBook;
    public $accountingBookAmortization;
    public $accountingBookRevRecSchedule;
    public $allowedShippingMethod;
    public $alternateDemandSourceItem;
    public $atpLeadTime;
    public $atpMethod;
    public $autoLeadTime;
    public $autoPreferredStockLevel;
    public $autoReorderPoint;
    public $availableToPartners;
    public $averageCost;
    public $backwardConsumptionDays;
    public $binNumber;
    public $binOnHandAvail;
    public $binOnHandCount;
    public $bomQuantity;
    public $buildEntireAssembly;
    public $buildTime;
    public $buyItNowPrice;
    public $caption;
    public $category;
    public $class;
    public $component;
    public $componentOf;
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
    public $dateViewed;
    public $daysBeforeExpiration;
    public $defaultReturnCost;
    public $defaultShippingMethod;
    public $deferRevRec;
    public $demandModifier;
    public $demandSource;
    public $demandTimeFence;
    public $department;
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
    public $externalId;
    public $externalIdString;
    public $featuredDescription;
    public $feedDescription;
    public $feedName;
    public $fixedLotSize;
    public $forwardConsumptionDays;
    public $fraudRisk;
    public $froogleProductFeed;
    public $fxCost;
    public $generateAccruals;
    public $giftCertAuthCode;
    public $giftCertEmail;
    public $giftCertExpDate;
    public $giftCertFrom;
    public $giftCertMsg;
    public $giftCertOrigAmt;
    public $giftCertRecipient;
    public $imageUrl;
    public $includeChildren;
    public $internalId;
    public $internalIdNumber;
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
    public $isPreferredVendor;
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
    public $lastModifiedDate;
    public $lastPurchasePrice;
    public $lastQuantityAvailableChange;
    public $leadTime;
    public $listingDuration;
    public $location;
    public $locationAllowStorePickup;
    public $locationAtpLeadTime;
    public $locationAverageCost;
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
    public $locationReorderPoint;
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
    public $manufactureraddr1;
    public $manufacturerCity;
    public $manufacturerState;
    public $manufacturerTariff;
    public $manufacturerTaxId;
    public $manufacturerZip;
    public $manufacturingChargeItem;
    public $matchBillToReceipt;
    public $matrix;
    public $matrixChild;
    public $metaTagHtml;
    public $minimumQuantity;
    public $mossApplies;
    public $mpn;
    public $multManufactureAddr;
    public $nexTagCategory;
    public $nexTagProductFeed;
    public $nextInvtCountDate;
    public $numActiveListings;
    public $numberAllowedDownloads;
    public $numCurrentlyListed;
    public $obsoleteDate;
    public $obsoleteRevision;
    public $offerSupport;
    public $onlineCustomerPrice;
    public $onSpecial;
    public $otherVendor;
    public $outOfStockBehavior;
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
    public $price;
    public $pricesIncludeTax;
    public $pricingGroup;
    public $primaryCategory;
    public $purchaseOrderAmount;
    public $purchaseOrderQuantity;
    public $purchaseOrderQuantityDiff;
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
    public $reorderPoint;
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
    public $saleUnit;
    public $sameAsPrimaryBookAmortization;
    public $sameAsPrimaryBookRevRec;
    public $scheduleBCode;
    public $scheduleBNumber;
    public $scheduleBQuantity;
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
    public $subsidiary;
    public $subType;
    public $supplyLotSizingMethod;
    public $supplyReplenishmentMethod;
    public $supplyTimeFence;
    public $supplyType;
    public $taxCode;
    public $taxSchedule;
    public $thumbnailUrl;
    public $totalValue;
    public $trackLandedCost;
    public $transferPrice;
    public $type;
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
    public $vsoeDeferral;
    public $vsoeDelivered;
    public $vsoePermitDiscount;
    public $vsoePrice;
    public $webSite;
    public $weight;
    public $yahooProductFeed;
    public $customFieldList;
    static $paramtypesmap = array(
        "account" => "SearchMultiSelectField",
        "accountingBook" => "SearchMultiSelectField",
        "accountingBookAmortization" => "SearchMultiSelectField",
        "accountingBookRevRecSchedule" => "SearchMultiSelectField",
        "allowedShippingMethod" => "SearchMultiSelectField",
        "alternateDemandSourceItem" => "SearchMultiSelectField",
        "atpLeadTime" => "SearchDoubleField",
        "atpMethod" => "SearchEnumMultiSelectField",
        "autoLeadTime" => "SearchBooleanField",
        "autoPreferredStockLevel" => "SearchBooleanField",
        "autoReorderPoint" => "SearchBooleanField",
        "availableToPartners" => "SearchBooleanField",
        "averageCost" => "SearchDoubleField",
        "backwardConsumptionDays" => "SearchLongField",
        "binNumber" => "SearchStringField",
        "binOnHandAvail" => "SearchDoubleField",
        "binOnHandCount" => "SearchDoubleField",
        "bomQuantity" => "SearchDoubleField",
        "buildEntireAssembly" => "SearchBooleanField",
        "buildTime" => "SearchDoubleField",
        "buyItNowPrice" => "SearchDoubleField",
        "caption" => "SearchStringField",
        "category" => "SearchMultiSelectField",
        "class" => "SearchMultiSelectField",
        "component" => "SearchMultiSelectField",
        "componentOf" => "SearchMultiSelectField",
        "componentYield" => "SearchDoubleField",
        "copyDescription" => "SearchBooleanField",
        "correlatedItem" => "SearchMultiSelectField",
        "correlatedItemCorrelation" => "SearchDoubleField",
        "correlatedItemCount" => "SearchLongField",
        "correlatedItemLift" => "SearchDoubleField",
        "correlatedItemPurchaseRate" => "SearchDoubleField",
        "cost" => "SearchDoubleField",
        "costAccountingStatus" => "SearchEnumMultiSelectField",
        "costCategory" => "SearchMultiSelectField",
        "costEstimate" => "SearchDoubleField",
        "costEstimateType" => "SearchEnumMultiSelectField",
        "costingMethod" => "SearchEnumMultiSelectField",
        "countryOfManufacture" => "SearchEnumMultiSelectField",
        "created" => "SearchDateField",
        "createJob" => "SearchBooleanField",
        "createRevenuePlansOn" => "SearchEnumMultiSelectField",
        "dateViewed" => "SearchDateField",
        "daysBeforeExpiration" => "SearchDoubleField",
        "defaultReturnCost" => "SearchDoubleField",
        "defaultShippingMethod" => "SearchMultiSelectField",
        "deferRevRec" => "SearchBooleanField",
        "demandModifier" => "SearchDoubleField",
        "demandSource" => "SearchEnumMultiSelectField",
        "demandTimeFence" => "SearchLongField",
        "department" => "SearchMultiSelectField",
        "directRevenuePosting" => "SearchBooleanField",
        "displayIneBayStore" => "SearchBooleanField",
        "displayName" => "SearchStringField",
        "distributionCategory" => "SearchMultiSelectField",
        "distributionNetwork" => "SearchMultiSelectField",
        "dontShowPrice" => "SearchBooleanField",
        "eBayItemDescription" => "SearchStringField",
        "eBayItemSubtitle" => "SearchStringField",
        "eBayItemTitle" => "SearchStringField",
        "ebayRelistingOption" => "SearchEnumMultiSelectField",
        "effectiveBomControl" => "SearchEnumMultiSelectField",
        "effectiveDate" => "SearchDateField",
        "effectiveRevision" => "SearchMultiSelectField",
        "endAuctionsWhenOutOfStock" => "SearchBooleanField",
        "excludeFromSitemap" => "SearchBooleanField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "featuredDescription" => "SearchStringField",
        "feedDescription" => "SearchStringField",
        "feedName" => "SearchStringField",
        "fixedLotSize" => "SearchDoubleField",
        "forwardConsumptionDays" => "SearchLongField",
        "fraudRisk" => "SearchEnumMultiSelectField",
        "froogleProductFeed" => "SearchBooleanField",
        "fxCost" => "SearchDoubleField",
        "generateAccruals" => "SearchBooleanField",
        "giftCertAuthCode" => "SearchStringField",
        "giftCertEmail" => "SearchStringField",
        "giftCertExpDate" => "SearchDateField",
        "giftCertFrom" => "SearchStringField",
        "giftCertMsg" => "SearchStringField",
        "giftCertOrigAmt" => "SearchStringField",
        "giftCertRecipient" => "SearchStringField",
        "imageUrl" => "SearchStringField",
        "includeChildren" => "SearchBooleanField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "inventoryLocation" => "SearchMultiSelectField",
        "invtClassification" => "SearchEnumMultiSelectField",
        "invtCountInterval" => "SearchLongField",
        "isAvailable" => "SearchBooleanField",
        "isDropShipItem" => "SearchBooleanField",
        "isFulfillable" => "SearchBooleanField",
        "isGcoCompliant" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "isLotItem" => "SearchBooleanField",
        "isOnline" => "SearchBooleanField",
        "isPreferredVendor" => "SearchBooleanField",
        "isSerialItem" => "SearchBooleanField",
        "isSpecialOrderItem" => "SearchBooleanField",
        "isSpecialWorkOrderItem" => "SearchBooleanField",
        "isStorePickupAllowed" => "SearchBooleanField",
        "issueProduct" => "SearchMultiSelectField",
        "isTaxable" => "SearchBooleanField",
        "isVsoeBundle" => "SearchBooleanField",
        "isWip" => "SearchBooleanField",
        "itemId" => "SearchStringField",
        "itemRevenueCategory" => "SearchMultiSelectField",
        "itemUrl" => "SearchStringField",
        "lastInvtCountDate" => "SearchDateField",
        "lastModifiedDate" => "SearchDateField",
        "lastPurchasePrice" => "SearchDoubleField",
        "lastQuantityAvailableChange" => "SearchDateField",
        "leadTime" => "SearchLongField",
        "listingDuration" => "SearchEnumMultiSelectField",
        "location" => "SearchMultiSelectField",
        "locationAllowStorePickup" => "SearchBooleanField",
        "locationAtpLeadTime" => "SearchDoubleField",
        "locationAverageCost" => "SearchDoubleField",
        "locationBuildTime" => "SearchDoubleField",
        "locationCost" => "SearchDoubleField",
        "locationCostAccountingStatus" => "SearchEnumMultiSelectField",
        "locationDefaultReturnCost" => "SearchDoubleField",
        "locationDemandSource" => "SearchEnumMultiSelectField",
        "locationDemandTimeFence" => "SearchLongField",
        "locationFixedLotSize" => "SearchDoubleField",
        "locationInventoryCostTemplate" => "SearchMultiSelectField",
        "locationInvtClassification" => "SearchEnumMultiSelectField",
        "locationInvtCountInterval" => "SearchLongField",
        "locationLastInvtCountDate" => "SearchDateField",
        "locationLeadTime" => "SearchLongField",
        "locationNextInvtCountDate" => "SearchDateField",
        "locationPeriodicLotSizeDays" => "SearchLongField",
        "locationPeriodicLotSizeType" => "SearchEnumMultiSelectField",
        "locationPreferredStockLevel" => "SearchDoubleField",
        "locationQtyAvailForStorePickup" => "SearchDoubleField",
        "locationQuantityAvailable" => "SearchDoubleField",
        "locationQuantityBackOrdered" => "SearchDoubleField",
        "locationQuantityCommitted" => "SearchDoubleField",
        "locationQuantityInTransit" => "SearchDoubleField",
        "locationQuantityOnHand" => "SearchDoubleField",
        "locationQuantityOnOrder" => "SearchDoubleField",
        "locationReorderPoint" => "SearchDoubleField",
        "locationRescheduleInDays" => "SearchLongField",
        "locationRescheduleOutDays" => "SearchLongField",
        "locationSafetyStockLevel" => "SearchDoubleField",
        "locationSupplyLotSizingMethod" => "SearchEnumMultiSelectField",
        "locationSupplyTimeFence" => "SearchLongField",
        "locationSupplyType" => "SearchEnumMultiSelectField",
        "locationTotalValue" => "SearchDoubleField",
        "locBackwardConsumptionDays" => "SearchLongField",
        "locForwardConsumptionDays" => "SearchLongField",
        "manufacturer" => "SearchStringField",
        "manufactureraddr1" => "SearchStringField",
        "manufacturerCity" => "SearchStringField",
        "manufacturerState" => "SearchStringField",
        "manufacturerTariff" => "SearchStringField",
        "manufacturerTaxId" => "SearchStringField",
        "manufacturerZip" => "SearchStringField",
        "manufacturingChargeItem" => "SearchBooleanField",
        "matchBillToReceipt" => "SearchBooleanField",
        "matrix" => "SearchBooleanField",
        "matrixChild" => "SearchBooleanField",
        "metaTagHtml" => "SearchStringField",
        "minimumQuantity" => "SearchLongField",
        "mossApplies" => "SearchBooleanField",
        "mpn" => "SearchStringField",
        "multManufactureAddr" => "SearchBooleanField",
        "nexTagCategory" => "SearchStringField",
        "nexTagProductFeed" => "SearchBooleanField",
        "nextInvtCountDate" => "SearchDateField",
        "numActiveListings" => "SearchLongField",
        "numberAllowedDownloads" => "SearchDoubleField",
        "numCurrentlyListed" => "SearchLongField",
        "obsoleteDate" => "SearchDateField",
        "obsoleteRevision" => "SearchMultiSelectField",
        "offerSupport" => "SearchBooleanField",
        "onlineCustomerPrice" => "SearchDoubleField",
        "onSpecial" => "SearchBooleanField",
        "otherVendor" => "SearchMultiSelectField",
        "outOfStockBehavior" => "SearchMultiSelectField",
        "overallQuantityPricingType" => "SearchEnumMultiSelectField",
        "overheadType" => "SearchEnumMultiSelectField",
        "pageTitle" => "SearchStringField",
        "parent" => "SearchMultiSelectField",
        "periodicLotSizeDays" => "SearchLongField",
        "periodicLotSizeType" => "SearchEnumMultiSelectField",
        "preferenceCriterion" => "SearchStringField",
        "preferredBin" => "SearchBooleanField",
        "preferredLocation" => "SearchMultiSelectField",
        "preferredStockLevel" => "SearchDoubleField",
        "preferredStockLevelDays" => "SearchLongField",
        "price" => "SearchDoubleField",
        "pricesIncludeTax" => "SearchBooleanField",
        "pricingGroup" => "SearchMultiSelectField",
        "primaryCategory" => "SearchLongField",
        "purchaseOrderAmount" => "SearchDoubleField",
        "purchaseOrderQuantity" => "SearchDoubleField",
        "purchaseOrderQuantityDiff" => "SearchDoubleField",
        "purchaseUnit" => "SearchMultiSelectField",
        "quantityAvailable" => "SearchDoubleField",
        "quantityBackOrdered" => "SearchDoubleField",
        "quantityCommitted" => "SearchDoubleField",
        "quantityOnHand" => "SearchDoubleField",
        "quantityOnOrder" => "SearchDoubleField",
        "quantityPricingSchedule" => "SearchMultiSelectField",
        "receiptAmount" => "SearchDoubleField",
        "receiptQuantity" => "SearchDoubleField",
        "receiptQuantityDiff" => "SearchDoubleField",
        "reorderMultiple" => "SearchLongField",
        "reorderPoint" => "SearchDoubleField",
        "rescheduleInDays" => "SearchLongField",
        "rescheduleOutDays" => "SearchLongField",
        "reservePrice" => "SearchDoubleField",
        "revenueAllocationGroup" => "SearchMultiSelectField",
        "revenueRecognitionRule" => "SearchMultiSelectField",
        "revRecForecastRule" => "SearchMultiSelectField",
        "revRecSchedule" => "SearchMultiSelectField",
        "roundUpAsComponent" => "SearchBooleanField",
        "safetyStockLevel" => "SearchDoubleField",
        "safetyStockLevelDays" => "SearchLongField",
        "salesDescription" => "SearchStringField",
        "saleUnit" => "SearchMultiSelectField",
        "sameAsPrimaryBookAmortization" => "SearchBooleanField",
        "sameAsPrimaryBookRevRec" => "SearchBooleanField",
        "scheduleBCode" => "SearchEnumMultiSelectField",
        "scheduleBNumber" => "SearchStringField",
        "scheduleBQuantity" => "SearchStringField",
        "searchKeywords" => "SearchStringField",
        "seasonalDemand" => "SearchBooleanField",
        "sellOnEBay" => "SearchBooleanField",
        "serialNumber" => "SearchStringField",
        "serialNumberLocation" => "SearchMultiSelectField",
        "shipIndividually" => "SearchBooleanField",
        "shipPackage" => "SearchMultiSelectField",
        "shippingCarrier" => "SearchEnumMultiSelectField",
        "shippingRate" => "SearchDoubleField",
        "shoppingDotComCategory" => "SearchStringField",
        "shoppingProductFeed" => "SearchBooleanField",
        "shopzillaCategoryId" => "SearchLongField",
        "shopzillaProductFeed" => "SearchBooleanField",
        "sitemapPriority" => "SearchEnumMultiSelectField",
        "softDescriptor" => "SearchMultiSelectField",
        "startingPrice" => "SearchDoubleField",
        "stockDescription" => "SearchStringField",
        "stockUnit" => "SearchMultiSelectField",
        "storeDescription" => "SearchStringField",
        "subsidiary" => "SearchMultiSelectField",
        "subType" => "SearchEnumMultiSelectField",
        "supplyLotSizingMethod" => "SearchEnumMultiSelectField",
        "supplyReplenishmentMethod" => "SearchEnumMultiSelectField",
        "supplyTimeFence" => "SearchLongField",
        "supplyType" => "SearchEnumMultiSelectField",
        "taxCode" => "SearchMultiSelectField",
        "taxSchedule" => "SearchMultiSelectField",
        "thumbnailUrl" => "SearchStringField",
        "totalValue" => "SearchDoubleField",
        "trackLandedCost" => "SearchBooleanField",
        "transferPrice" => "SearchDoubleField",
        "type" => "SearchEnumMultiSelectField",
        "unitsType" => "SearchMultiSelectField",
        "upcCode" => "SearchStringField",
        "urlComponent" => "SearchStringField",
        "useBins" => "SearchBooleanField",
        "useComponentYield" => "SearchBooleanField",
        "useMarginalRates" => "SearchBooleanField",
        "vendor" => "SearchMultiSelectField",
        "vendorCode" => "SearchStringField",
        "vendorCost" => "SearchDoubleField",
        "vendorCostEntered" => "SearchDoubleField",
        "vendorName" => "SearchStringField",
        "vendorPriceCurrency" => "SearchMultiSelectField",
        "vsoeDeferral" => "SearchEnumMultiSelectField",
        "vsoeDelivered" => "SearchBooleanField",
        "vsoePermitDiscount" => "SearchEnumMultiSelectField",
        "vsoePrice" => "SearchDoubleField",
        "webSite" => "SearchMultiSelectField",
        "weight" => "SearchDoubleField",
        "yahooProductFeed" => "SearchBooleanField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
