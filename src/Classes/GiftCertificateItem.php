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

class GiftCertificateItem extends Record {
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
     * @var boolean
     */
    public $includeChildren;
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
     * @var \NetSuite\Classes\RecordRefList
     */
    public $subsidiaryList;
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
    public $liabilityAccount;
    /**
     * @var integer
     */
    public $daysBeforeExpiration;
    /**
     * @var boolean
     */
    public $isTaxable;
    /**
     * @var float
     */
    public $rate;
    /**
     * @var string
     */
    public $urlComponent;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesTaxCode;
    /**
     * @var boolean
     */
    public $pricesIncludeTax;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxSchedule;
    /**
     * @var float
     */
    public $costEstimate;
    /**
     * @var \NetSuite\Classes\ItemCostEstimateType
     */
    public $costEstimateType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billingSchedule;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $issueProduct;
    /**
     * @var boolean
     */
    public $isFulfillable;
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
    public $specialsDescription;
    /**
     * @var string
     */
    public $featuredDescription;
    /**
     * @var string
     */
    public $relatedItemsDescription;
    /**
     * @var \NetSuite\Classes\PricingMatrix
     */
    public $pricingMatrix;
    /**
     * @var \NetSuite\Classes\GiftCertificateItemAuthCodesList
     */
    public $authCodesList;
    /**
     * @var \NetSuite\Classes\SiteCategoryList
     */
    public $siteCategoryList;
    /**
     * @var \NetSuite\Classes\TranslationList
     */
    public $translationsList;
    /**
     * @var \NetSuite\Classes\ItemOptionsList
     */
    public $itemOptionsList;
    /**
     * @var \NetSuite\Classes\PresentationItemList
     */
    public $presentationItemList;
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
