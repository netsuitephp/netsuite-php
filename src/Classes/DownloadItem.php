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

class DownloadItem extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $customForm;
    public $salesDescription;
    public $quantityPricingSchedule;
    public $deferredRevenueAccount;
    public $onSpecial;
    public $itemId;
    public $upcCode;
    public $displayName;
    public $parent;
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
    public $incomeAccount;
    public $numOfAllowedDownloads;
    public $daysBeforeExpiration;
    public $immediateDownload;
    public $isTaxable;
    public $issueProduct;
    public $taxSchedule;
    public $costEstimateType;
    public $costEstimate;
    public $billingSchedule;
    public $isFulfillable;
    public $useMarginalRates;
    public $overallQuantityPricingType;
    public $pricingGroup;
    public $revRecSchedule;
    public $vsoePrice;
    public $vsoeSopGroup;
    public $vsoeDeferral;
    public $vsoePermitDiscount;
    public $vsoeDelivered;
    public $itemRevenueCategory;
    public $deferRevRec;
    public $revenueRecognitionRule;
    public $revRecForecastRule;
    public $revenueAllocationGroup;
    public $createRevenuePlansOn;
    public $directRevenuePosting;
    public $storeDisplayName;
    public $storeDisplayThumbnail;
    public $storeDisplayImage;
    public $featuredDescription;
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
    public $outOfStockBehavior;
    public $relatedItemsDescription;
    public $specialsDescription;
    public $pricingMatrix;
    public $accountingBookDetailList;
    public $siteCategoryList;
    public $presentationItemList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "salesDescription" => "string",
        "quantityPricingSchedule" => "RecordRef",
        "deferredRevenueAccount" => "RecordRef",
        "onSpecial" => "boolean",
        "itemId" => "string",
        "upcCode" => "string",
        "displayName" => "string",
        "parent" => "RecordRef",
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
        "incomeAccount" => "RecordRef",
        "numOfAllowedDownloads" => "integer",
        "daysBeforeExpiration" => "integer",
        "immediateDownload" => "boolean",
        "isTaxable" => "boolean",
        "issueProduct" => "RecordRef",
        "taxSchedule" => "RecordRef",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "billingSchedule" => "RecordRef",
        "isFulfillable" => "boolean",
        "useMarginalRates" => "boolean",
        "overallQuantityPricingType" => "ItemOverallQuantityPricingType",
        "pricingGroup" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "vsoePrice" => "float",
        "vsoeSopGroup" => "VsoeSopGroup",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "itemRevenueCategory" => "RecordRef",
        "deferRevRec" => "boolean",
        "revenueRecognitionRule" => "RecordRef",
        "revRecForecastRule" => "RecordRef",
        "revenueAllocationGroup" => "RecordRef",
        "createRevenuePlansOn" => "ItemCreateRevenuePlansOn",
        "directRevenuePosting" => "boolean",
        "storeDisplayName" => "string",
        "storeDisplayThumbnail" => "RecordRef",
        "storeDisplayImage" => "RecordRef",
        "featuredDescription" => "string",
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
        "outOfStockBehavior" => "ItemOutOfStockBehavior",
        "relatedItemsDescription" => "string",
        "specialsDescription" => "string",
        "pricingMatrix" => "PricingMatrix",
        "accountingBookDetailList" => "ItemAccountingBookDetailList",
        "siteCategoryList" => "SiteCategoryList",
        "presentationItemList" => "PresentationItemList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
