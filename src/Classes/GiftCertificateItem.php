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

class GiftCertificateItem extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $customForm;
    public $itemId;
    public $upcCode;
    public $displayName;
    public $includeChildren;
    public $parent;
    public $isOnline;
    public $isGcoCompliant;
    public $offerSupport;
    public $isInactive;
    public $availableToPartners;
    public $department;
    public $class;
    public $location;
    public $subsidiaryList;
    public $salesDescription;
    public $incomeAccount;
    public $liabilityAccount;
    public $daysBeforeExpiration;
    public $isTaxable;
    public $rate;
    public $urlComponent;
    public $salesTaxCode;
    public $pricesIncludeTax;
    public $taxSchedule;
    public $costEstimate;
    public $costEstimateType;
    public $billingSchedule;
    public $issueProduct;
    public $isFulfillable;
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
    public $specialsDescription;
    public $featuredDescription;
    public $relatedItemsDescription;
    public $pricingMatrix;
    public $authCodesList;
    public $siteCategoryList;
    public $translationsList;
    public $itemOptionsList;
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
        "includeChildren" => "boolean",
        "parent" => "RecordRef",
        "isOnline" => "boolean",
        "isGcoCompliant" => "boolean",
        "offerSupport" => "boolean",
        "isInactive" => "boolean",
        "availableToPartners" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiaryList" => "RecordRefList",
        "salesDescription" => "string",
        "incomeAccount" => "RecordRef",
        "liabilityAccount" => "RecordRef",
        "daysBeforeExpiration" => "integer",
        "isTaxable" => "boolean",
        "rate" => "float",
        "urlComponent" => "string",
        "salesTaxCode" => "RecordRef",
        "pricesIncludeTax" => "boolean",
        "taxSchedule" => "RecordRef",
        "costEstimate" => "float",
        "costEstimateType" => "ItemCostEstimateType",
        "billingSchedule" => "RecordRef",
        "issueProduct" => "RecordRef",
        "isFulfillable" => "boolean",
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
        "specialsDescription" => "string",
        "featuredDescription" => "string",
        "relatedItemsDescription" => "string",
        "pricingMatrix" => "PricingMatrix",
        "authCodesList" => "GiftCertificateItemAuthCodesList",
        "siteCategoryList" => "SiteCategoryList",
        "translationsList" => "TranslationList",
        "itemOptionsList" => "ItemOptionsList",
        "presentationItemList" => "PresentationItemList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
