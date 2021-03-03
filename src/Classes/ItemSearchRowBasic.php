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

class ItemSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $accBookRevRecForecastRule;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $accountingBook;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $accountingBookAmortization;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $accountingBookCreatePlansOn;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $accountingBookRevRecRule;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $accountingBookRevRecSchedule;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $allowedShippingMethod;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $alternateDemandSourceItem;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $assetAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $atpLeadTime;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $atpMethod;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $autoLeadTime;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $autoPreferredStockLevel;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $autoReorderPoint;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $availableToPartners;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $averageCost;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $backwardConsumptionDays;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $basePrice;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $billExchRateVarianceAcct;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $billPriceVarianceAcct;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $billQtyVarianceAcct;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $binNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $binOnHandAvail;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $binOnHandCount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $bomQuantity;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $buildEntireAssembly;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $buildTime;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $buyItNowPrice;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $category;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $categoryPreferred;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $class;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $componentYield;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $consumptionUnit;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $contingentRevenueHandling;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $conversionRate;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $copyDescription;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $correlatedItem;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $correlatedItemCorrelation;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $correlatedItemCount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $correlatedItemLift;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $correlatedItemPurchaseRate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $cost;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $costAccountingStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $costCategory;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $costEstimate;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $costEstimateType;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $costingMethod;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $countryOfManufacture;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $created;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $createJob;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $createRevenuePlansOn;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $custReturnVarianceAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $dateViewed;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $daysBeforeExpiration;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $defaultReturnCost;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $defaultShippingMethod;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $deferredExpenseAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $deferredRevenueAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $deferRevRec;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $demandModifier;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $demandSource;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $demandTimeFence;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $department;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $departmentnohierarchy;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $directRevenuePosting;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $displayIneBayStore;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $displayName;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $distributionCategory;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $distributionNetwork;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $dontShowPrice;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $eBayItemDescription;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $eBayItemSubtitle;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $eBayItemTitle;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $ebayRelistingOption;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $effectiveBomControl;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $effectiveDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $effectiveRevision;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $enableCatchWeight;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $endAuctionsWhenOutOfStock;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $excludeFromSitemap;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $expenseAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $featuredDescription;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $feedDescription;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $feedName;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $fixedLotSize;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $forwardConsumptionDays;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $fraudRisk;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $froogleProductFeed;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $futureHorizon;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $fxCost;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $gainLossAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $generateAccruals;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $giftCertAuthCode;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $giftCertEmail;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $giftCertExpirationDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $giftCertFrom;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $giftCertMessage;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $giftCertOriginalAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $giftCertRecipient;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $hierarchyNode;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $hierarchyVersion;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $hits;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $imageUrl;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $includeChildren;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $incomeAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $intercoDefRevAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $intercoExpenseAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $intercoIncomeAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $inventoryLocation;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $invtClassification;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $invtCountInterval;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isAvailable;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isDropShipItem;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isFulfillable;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isGcoCompliant;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isLotItem;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isOnline;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isSerialItem;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isSpecialOrderItem;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isSpecialWorkOrderItem;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isStorePickupAllowed;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $issueProduct;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isTaxable;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isVsoeBundle;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isWip;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $itemId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $itemRevenueCategory;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $itemUrl;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastInvtCountDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $lastPurchasePrice;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastQuantityAvailableChange;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $leadTime;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $liabilityAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $listingDuration;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $locationAllowStorePickup;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $locationAtpLeadTime;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $locationAverageCost;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $locationBinQuantityAvailable;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $locationBuildTime;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $locationCost;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $locationCostAccountingStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $locationDefaultReturnCost;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $locationDemandSource;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $locationDemandTimeFence;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $locationFixedLotSize;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $locationInventoryCostTemplate;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $locationInvtClassification;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $locationInvtCountInterval;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $locationLastInvtCountDate;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $locationLeadTime;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $locationNextInvtCountDate;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $locationPeriodicLotSizeDays;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $locationPeriodicLotSizeType;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $locationPreferredStockLevel;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $locationQtyAvailForStorePickup;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $locationQuantityAvailable;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $locationQuantityBackOrdered;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $locationQuantityCommitted;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $locationQuantityInTransit;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $locationQuantityOnHand;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $locationQuantityOnOrder;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $locationReOrderPoint;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $locationRescheduleInDays;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $locationRescheduleOutDays;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $locationSafetyStockLevel;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $locationStorePickupBufferStock;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $locationSupplyLotSizingMethod;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $locationSupplyTimeFence;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $locationSupplyType;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $locationTotalValue;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $locBackwardConsumptionDays;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $locForwardConsumptionDays;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $lowerWarningLimit;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $manufacturer;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $manufacturerAddr1;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $manufacturerCity;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $manufacturerState;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $manufacturerTariff;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $manufacturerTaxId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $manufacturerZip;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $manufacturingChargeItem;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $matchBillToReceipt;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $maximumQuantity;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $memberItem;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $memberQuantity;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $metaTagHtml;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $minimumQuantity;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $modified;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $mossApplies;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $mpn;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $multManufactureAddr;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $nextagCategory;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $nextagProductFeed;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $nextInvtCountDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $noPriceMessage;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $numActiveListings;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $numberAllowedDownloads;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $numCurrentlyListed;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $obsoleteDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $obsoleteRevision;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $offerSupport;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $onlineCustomerPrice;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $onlinePrice;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $onSpecial;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $otherPrices;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $otherVendor;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $outOfStockBehavior;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $outOfStockMessage;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $overallQuantityPricingType;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $overheadType;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $pageTitle;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $parent;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $periodicLotSizeDays;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $periodicLotSizeType;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $preferenceCriterion;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $preferredBin;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $preferredLocation;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $preferredStockLevel;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $preferredStockLevelDays;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $pricesIncludeTax;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $pricingGroup;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $primaryCategory;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $prodPriceVarianceAcct;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $prodQtyVarianceAcct;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $purchaseDescription;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $purchaseOrderAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $purchaseOrderQuantity;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $purchaseOrderQuantityDiff;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $purchasePriceVarianceAcct;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $purchaseUnit;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityAvailable;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityBackOrdered;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityCommitted;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityOnHand;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityOnOrder;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $quantityPricingSchedule;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $receiptAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $receiptQuantity;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $receiptQuantityDiff;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $reorderMultiple;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $reOrderPoint;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $rescheduleInDays;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $rescheduleOutDays;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $reservePrice;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $revenueAllocationGroup;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $revenueRecognitionRule;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $revRecForecastRule;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $revReclassFXAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $revRecSchedule;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $roundUpAsComponent;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $safetyStockLevel;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $safetyStockLevelDays;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $salesDescription;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $salesTaxCode;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $saleUnit;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $sameAsPrimaryBookAmortization;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $sameAsPrimaryBookRevRec;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $scheduleBCode;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $scheduleBNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $scheduleBQuantity;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $scrapAcct;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $searchKeywords;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $seasonalDemand;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $secondaryConsumptionUnit;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $secondaryPurchaseUnit;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $secondarySaleUnit;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $secondaryStockUnit;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $secondaryUnitsType;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $sellOnEBay;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $serialNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $serialNumberLocation;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $shipIndividually;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $shipPackage;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $shippingCarrier;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $shippingRate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shoppingDotComCategory;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $shoppingProductFeed;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $shopzillaCategoryId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $shopzillaProductFeed;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $sitemapPriority;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $softDescriptor;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $startingPrice;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $stockDescription;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $stockUnit;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $storeDescription;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $storeDetailedDescription;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $storeDisplayImage;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $storeDisplayName;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $storeDisplayThumbnail;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $subType;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $supplyLotSizingMethod;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $supplyReplenishmentMethod;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $supplyTimeFence;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $supplyType;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $taxSchedule;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $thumbNailUrl;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $totalValue;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $trackLandedCost;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $transferPrice;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $type;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $unbuildVarianceAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $unitsType;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $upcCode;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $upperWarningLimit;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $urlComponent;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $useBins;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $useComponentYield;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $useMarginalRates;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $vendor;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $vendorCode;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $vendorCost;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $vendorCostEntered;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $vendorName;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $vendorPriceCurrency;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $vendorSchedule;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $vendReturnVarianceAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $vsoeDeferral;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $vsoeDelivered;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $vsoePermitDiscount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $vsoePrice;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $vsoeSopGroup;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $webSite;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $weight;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $weightUnit;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $wipAcct;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $wipVarianceAcct;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $yahooProductFeed;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "accBookRevRecForecastRule" => "SearchColumnSelectField[]",
        "accountingBook" => "SearchColumnSelectField[]",
        "accountingBookAmortization" => "SearchColumnSelectField[]",
        "accountingBookCreatePlansOn" => "SearchColumnSelectField[]",
        "accountingBookRevRecRule" => "SearchColumnSelectField[]",
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
        "consumptionUnit" => "SearchColumnSelectField[]",
        "contingentRevenueHandling" => "SearchColumnBooleanField[]",
        "conversionRate" => "SearchColumnDoubleField[]",
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
        "createRevenuePlansOn" => "SearchColumnSelectField[]",
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
        "enableCatchWeight" => "SearchColumnBooleanField[]",
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
        "futureHorizon" => "SearchColumnLongField[]",
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
        "hierarchyNode" => "SearchColumnStringField[]",
        "hierarchyVersion" => "SearchColumnStringField[]",
        "hits" => "SearchColumnLongField[]",
        "imageUrl" => "SearchColumnStringField[]",
        "includeChildren" => "SearchColumnBooleanField[]",
        "incomeAccount" => "SearchColumnSelectField[]",
        "intercoDefRevAccount" => "SearchColumnSelectField[]",
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
        "locationStorePickupBufferStock" => "SearchColumnDoubleField[]",
        "locationSupplyLotSizingMethod" => "SearchColumnEnumSelectField[]",
        "locationSupplyTimeFence" => "SearchColumnLongField[]",
        "locationSupplyType" => "SearchColumnEnumSelectField[]",
        "locationTotalValue" => "SearchColumnDoubleField[]",
        "locBackwardConsumptionDays" => "SearchColumnLongField[]",
        "locForwardConsumptionDays" => "SearchColumnLongField[]",
        "lowerWarningLimit" => "SearchColumnDoubleField[]",
        "manufacturer" => "SearchColumnStringField[]",
        "manufacturerAddr1" => "SearchColumnStringField[]",
        "manufacturerCity" => "SearchColumnStringField[]",
        "manufacturerState" => "SearchColumnStringField[]",
        "manufacturerTariff" => "SearchColumnStringField[]",
        "manufacturerTaxId" => "SearchColumnStringField[]",
        "manufacturerZip" => "SearchColumnStringField[]",
        "manufacturingChargeItem" => "SearchColumnBooleanField[]",
        "matchBillToReceipt" => "SearchColumnBooleanField[]",
        "maximumQuantity" => "SearchColumnStringField[]",
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
        "revReclassFXAccount" => "SearchColumnSelectField[]",
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
        "secondaryConsumptionUnit" => "SearchColumnSelectField[]",
        "secondaryPurchaseUnit" => "SearchColumnSelectField[]",
        "secondarySaleUnit" => "SearchColumnSelectField[]",
        "secondaryStockUnit" => "SearchColumnSelectField[]",
        "secondaryUnitsType" => "SearchColumnSelectField[]",
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
        "upperWarningLimit" => "SearchColumnDoubleField[]",
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
        "vsoeSopGroup" => "SearchColumnEnumSelectField[]",
        "webSite" => "SearchColumnSelectField[]",
        "weight" => "SearchColumnDoubleField[]",
        "weightUnit" => "SearchColumnEnumSelectField[]",
        "wipAcct" => "SearchColumnSelectField[]",
        "wipVarianceAcct" => "SearchColumnSelectField[]",
        "yahooProductFeed" => "SearchColumnBooleanField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
