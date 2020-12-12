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

class ItemSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $accBookRevRecForecastRule;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $account;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $accountingBook;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $accountingBookAmortization;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $accountingBookCreatePlansOn;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $accountingBookRevRecRule;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $accountingBookRevRecSchedule;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $allowedShippingMethod;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $alternateDemandSourceItem;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $atpLeadTime;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $atpMethod;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $autoLeadTime;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $autoPreferredStockLevel;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $autoReorderPoint;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $availableToPartners;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $averageCost;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $backwardConsumptionDays;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $binNumber;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $binOnHandAvail;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $binOnHandCount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $bomQuantity;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $buildEntireAssembly;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $buildTime;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $buyItNowPrice;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $caption;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $category;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $class;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $component;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $componentOf;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $componentYield;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $consumptionUnit;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $contingentRevenueHandling;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $conversionRate;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $copyDescription;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $correlatedItem;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $correlatedItemCorrelation;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $correlatedItemCount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $correlatedItemLift;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $correlatedItemPurchaseRate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $cost;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $costAccountingStatus;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $costCategory;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $costEstimate;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $costEstimateType;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $costingMethod;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $countryOfManufacture;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $created;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $createJob;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $createRevenuePlansOn;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $dateViewed;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $daysBeforeExpiration;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $defaultReturnCost;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $defaultShippingMethod;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $deferRevRec;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $demandModifier;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $demandSource;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $demandTimeFence;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $department;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $directRevenuePosting;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $displayIneBayStore;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $displayName;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $distributionCategory;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $distributionNetwork;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $dontShowPrice;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $eBayItemDescription;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $eBayItemSubtitle;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $eBayItemTitle;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $ebayRelistingOption;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $effectiveBomControl;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $effectiveDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $effectiveRevision;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $enableCatchWeight;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $endAuctionsWhenOutOfStock;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $excludeFromSitemap;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $featuredDescription;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $feedDescription;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $feedName;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $fixedLotSize;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $forwardConsumptionDays;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $fraudRisk;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $froogleProductFeed;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $futureHorizon;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $fxCost;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $generateAccruals;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $giftCertAuthCode;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $giftCertEmail;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $giftCertExpDate;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $giftCertFrom;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $giftCertMsg;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $giftCertOrigAmt;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $giftCertRecipient;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $hierarchyNode;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $hierarchyVersion;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $imageUrl;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $includeChildren;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $inventoryLocation;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $invtClassification;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $invtCountInterval;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isAvailable;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isDropShipItem;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isFulfillable;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isGcoCompliant;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isLotItem;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isOnline;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isPreferredVendor;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isSerialItem;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isSpecialOrderItem;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isSpecialWorkOrderItem;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isStorePickupAllowed;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $issueProduct;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isTaxable;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isVsoeBundle;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isWip;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $itemId;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $itemRevenueCategory;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $itemUrl;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastInvtCountDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $lastPurchasePrice;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastQuantityAvailableChange;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $leadTime;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $listingDuration;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $locationAllowStorePickup;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $locationAtpLeadTime;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $locationAverageCost;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $locationBuildTime;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $locationCost;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $locationCostAccountingStatus;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $locationDefaultReturnCost;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $locationDemandSource;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $locationDemandTimeFence;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $locationFixedLotSize;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $locationInventoryCostTemplate;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $locationInvtClassification;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $locationInvtCountInterval;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $locationLastInvtCountDate;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $locationLeadTime;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $locationNextInvtCountDate;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $locationPeriodicLotSizeDays;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $locationPeriodicLotSizeType;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $locationPreferredStockLevel;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $locationQtyAvailForStorePickup;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $locationQuantityAvailable;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $locationQuantityBackOrdered;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $locationQuantityCommitted;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $locationQuantityInTransit;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $locationQuantityOnHand;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $locationQuantityOnOrder;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $locationReorderPoint;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $locationRescheduleInDays;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $locationRescheduleOutDays;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $locationSafetyStockLevel;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $locationStorePickupBufferStock;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $locationSupplyLotSizingMethod;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $locationSupplyTimeFence;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $locationSupplyType;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $locationTotalValue;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $locBackwardConsumptionDays;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $locForwardConsumptionDays;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $lowerWarningLimit;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $manufacturer;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $manufactureraddr1;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $manufacturerCity;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $manufacturerState;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $manufacturerTariff;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $manufacturerTaxId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $manufacturerZip;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $manufacturingChargeItem;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $matchBillToReceipt;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $matrix;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $matrixChild;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $maximumQuantity;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $metaTagHtml;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $minimumQuantity;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $mossApplies;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $mpn;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $multManufactureAddr;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $nexTagCategory;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $nexTagProductFeed;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $nextInvtCountDate;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $numActiveListings;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $numberAllowedDownloads;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $numCurrentlyListed;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $obsoleteDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $obsoleteRevision;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $offerSupport;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $onlineCustomerPrice;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $onSpecial;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $otherVendor;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $outOfStockBehavior;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $overallQuantityPricingType;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $overheadType;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $pageTitle;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $parent;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $periodicLotSizeDays;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $periodicLotSizeType;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $preferenceCriterion;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $preferredBin;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $preferredLocation;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $preferredStockLevel;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $preferredStockLevelDays;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $price;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $pricesIncludeTax;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $pricingGroup;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $primaryCategory;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $purchaseOrderAmount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $purchaseOrderQuantity;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $purchaseOrderQuantityDiff;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $purchaseUnit;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantityAvailable;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantityBackOrdered;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantityCommitted;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantityOnHand;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantityOnOrder;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $quantityPricingSchedule;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $receiptAmount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $receiptQuantity;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $receiptQuantityDiff;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $reorderMultiple;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $reorderPoint;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $rescheduleInDays;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $rescheduleOutDays;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $reservePrice;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $revenueAllocationGroup;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $revenueRecognitionRule;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $revRecForecastRule;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $revRecSchedule;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $roundUpAsComponent;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $safetyStockLevel;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $safetyStockLevelDays;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $salesDescription;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $saleUnit;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $sameAsPrimaryBookAmortization;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $sameAsPrimaryBookRevRec;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $scheduleBCode;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $scheduleBNumber;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $scheduleBQuantity;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $searchKeywords;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $seasonalDemand;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $secondaryConsumptionUnit;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $secondaryPurchaseUnit;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $secondarySaleUnit;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $secondaryStockUnit;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $secondaryUnitsType;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $sellOnEBay;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $serialNumber;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $serialNumberLocation;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $shipIndividually;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $shipPackage;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $shippingCarrier;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $shippingRate;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $shoppingDotComCategory;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $shoppingProductFeed;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $shopzillaCategoryId;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $shopzillaProductFeed;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $sitemapPriority;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $softDescriptor;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $startingPrice;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $stockDescription;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $stockUnit;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $storeDescription;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $subType;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $supplyLotSizingMethod;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $supplyReplenishmentMethod;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $supplyTimeFence;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $supplyType;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $taxCode;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $taxSchedule;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $thumbnailUrl;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $totalValue;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $trackLandedCost;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $transferPrice;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $type;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $unitsType;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $upcCode;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $upperWarningLimit;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $urlComponent;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $useBins;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $useComponentYield;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $useMarginalRates;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $vendor;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $vendorCode;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $vendorCost;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $vendorCostEntered;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $vendorName;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $vendorPriceCurrency;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $vsoeDeferral;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $vsoeDelivered;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $vsoePermitDiscount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $vsoePrice;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $vsoeSopGroup;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $webSite;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $weight;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $yahooProductFeed;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "accBookRevRecForecastRule" => "SearchMultiSelectField",
        "account" => "SearchMultiSelectField",
        "accountingBook" => "SearchMultiSelectField",
        "accountingBookAmortization" => "SearchMultiSelectField",
        "accountingBookCreatePlansOn" => "SearchMultiSelectField",
        "accountingBookRevRecRule" => "SearchMultiSelectField",
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
        "consumptionUnit" => "SearchMultiSelectField",
        "contingentRevenueHandling" => "SearchBooleanField",
        "conversionRate" => "SearchDoubleField",
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
        "createRevenuePlansOn" => "SearchMultiSelectField",
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
        "enableCatchWeight" => "SearchBooleanField",
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
        "futureHorizon" => "SearchLongField",
        "fxCost" => "SearchDoubleField",
        "generateAccruals" => "SearchBooleanField",
        "giftCertAuthCode" => "SearchStringField",
        "giftCertEmail" => "SearchStringField",
        "giftCertExpDate" => "SearchDateField",
        "giftCertFrom" => "SearchStringField",
        "giftCertMsg" => "SearchStringField",
        "giftCertOrigAmt" => "SearchStringField",
        "giftCertRecipient" => "SearchStringField",
        "hierarchyNode" => "SearchMultiSelectField",
        "hierarchyVersion" => "SearchMultiSelectField",
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
        "locationStorePickupBufferStock" => "SearchDoubleField",
        "locationSupplyLotSizingMethod" => "SearchEnumMultiSelectField",
        "locationSupplyTimeFence" => "SearchLongField",
        "locationSupplyType" => "SearchEnumMultiSelectField",
        "locationTotalValue" => "SearchDoubleField",
        "locBackwardConsumptionDays" => "SearchLongField",
        "locForwardConsumptionDays" => "SearchLongField",
        "lowerWarningLimit" => "SearchDoubleField",
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
        "maximumQuantity" => "SearchLongField",
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
        "secondaryConsumptionUnit" => "SearchMultiSelectField",
        "secondaryPurchaseUnit" => "SearchMultiSelectField",
        "secondarySaleUnit" => "SearchMultiSelectField",
        "secondaryStockUnit" => "SearchMultiSelectField",
        "secondaryUnitsType" => "SearchMultiSelectField",
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
        "upperWarningLimit" => "SearchDoubleField",
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
        "vsoeSopGroup" => "SearchEnumMultiSelectField",
        "webSite" => "SearchMultiSelectField",
        "weight" => "SearchDoubleField",
        "yahooProductFeed" => "SearchBooleanField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
