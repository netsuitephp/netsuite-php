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

class KitItem extends Record {
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $parent;
    /**
     * @var boolean
     */
    public $printItems;
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
     * @var \NetSuite\Classes\RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var boolean
     */
    public $includeChildren;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var string
     */
    public $description;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $incomeAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxSchedule;
    /**
     * @var float
     */
    public $shippingCost;
    /**
     * @var float
     */
    public $handlingCost;
    /**
     * @var boolean
     */
    public $isTaxable;
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesTaxCode;
    /**
     * @var float
     */
    public $weight;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $weightUnit;
    /**
     * @var float
     */
    public $rate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billingSchedule;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $deferredRevenueAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $revRecSchedule;
    /**
     * @var string
     */
    public $stockDescription;
    /**
     * @var boolean
     */
    public $producer;
    /**
     * @var string
     */
    public $manufacturer;
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
    public $manufactureraddr1;
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
     * @var \NetSuite\Classes\RecordRef
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $issueProduct;
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
    public $softDescriptor;
    /**
     * @var boolean
     */
    public $isFulfillable;
    /**
     * @var boolean
     */
    public $pricesIncludeTax;
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
     * @var float
     */
    public $costEstimate;
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
     * @var boolean
     */
    public $shipIndividually;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shipPackage;
    /**
     * @var string
     */
    public $storeDisplayName;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $storeDisplayThumbnail;
    /**
     * @var string
     */
    public $outOfStockMessage;
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
    public $urlComponent;
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
     * @var \NetSuite\Classes\ItemOptionsList
     */
    public $itemOptionsList;
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
    public $shoppingDotComCategory;
    /**
     * @var integer
     */
    public $shopzillaCategoryId;
    /**
     * @var \NetSuite\Classes\ItemOutOfStockBehavior
     */
    public $outOfStockBehavior;
    /**
     * @var string
     */
    public $nexTagCategory;
    /**
     * @var \NetSuite\Classes\ProductFeedList
     */
    public $productFeedList;
    /**
     * @var string
     */
    public $relatedItemsDescription;
    /**
     * @var boolean
     */
    public $onSpecial;
    /**
     * @var string
     */
    public $specialsDescription;
    /**
     * @var string
     */
    public $featuredDescription;
    /**
     * @var \NetSuite\Classes\PricingMatrix
     */
    public $pricingMatrix;
    /**
     * @var \NetSuite\Classes\SiteCategoryList
     */
    public $siteCategoryList;
    /**
     * @var \NetSuite\Classes\ItemMemberList
     */
    public $memberList;
    /**
     * @var \NetSuite\Classes\ItemAccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var \NetSuite\Classes\TranslationList
     */
    public $translationsList;
    /**
     * @var \NetSuite\Classes\PresentationItemList
     */
    public $presentationItemList;
    /**
     * @var \NetSuite\Classes\KitItemHierarchyVersionsList
     */
    public $hierarchyVersionsList;
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
        "parent" => "RecordRef",
        "printItems" => "boolean",
        "isOnline" => "boolean",
        "isGcoCompliant" => "boolean",
        "offerSupport" => "boolean",
        "isInactive" => "boolean",
        "availableToPartners" => "boolean",
        "department" => "RecordRef",
        "subsidiaryList" => "RecordRefList",
        "class" => "RecordRef",
        "includeChildren" => "boolean",
        "location" => "RecordRef",
        "description" => "string",
        "incomeAccount" => "RecordRef",
        "taxSchedule" => "RecordRef",
        "shippingCost" => "float",
        "handlingCost" => "float",
        "isTaxable" => "boolean",
        "deferRevRec" => "boolean",
        "revenueRecognitionRule" => "RecordRef",
        "revRecForecastRule" => "RecordRef",
        "revenueAllocationGroup" => "RecordRef",
        "createRevenuePlansOn" => "RecordRef",
        "directRevenuePosting" => "boolean",
        "contingentRevenueHandling" => "boolean",
        "revReclassFXAccount" => "RecordRef",
        "salesTaxCode" => "RecordRef",
        "weight" => "float",
        "weightUnit" => "RecordRef",
        "rate" => "float",
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
        "defaultItemShipMethod" => "RecordRef",
        "itemCarrier" => "ShippingCarrier",
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
        "maximumQuantity" => "integer",
        "softDescriptor" => "RecordRef",
        "isFulfillable" => "boolean",
        "pricesIncludeTax" => "boolean",
        "quantityPricingSchedule" => "RecordRef",
        "useMarginalRates" => "boolean",
        "costEstimateType" => "ItemCostEstimateType",
        "isHazmatItem" => "boolean",
        "hazmatId" => "string",
        "hazmatShippingName" => "string",
        "hazmatHazardClass" => "string",
        "hazmatPackingGroup" => "HazmatPackingGroup",
        "hazmatItemUnits" => "string",
        "hazmatItemUnitsQty" => "float",
        "costEstimate" => "float",
        "overallQuantityPricingType" => "ItemOverallQuantityPricingType",
        "pricingGroup" => "RecordRef",
        "vsoePrice" => "float",
        "vsoeSopGroup" => "VsoeSopGroup",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "itemRevenueCategory" => "RecordRef",
        "shipIndividually" => "boolean",
        "shipPackage" => "RecordRef",
        "storeDisplayName" => "string",
        "storeDisplayThumbnail" => "RecordRef",
        "outOfStockMessage" => "string",
        "storeDisplayImage" => "RecordRef",
        "storeDescription" => "string",
        "storeDetailedDescription" => "string",
        "storeItemTemplate" => "RecordRef",
        "pageTitle" => "string",
        "urlComponent" => "string",
        "metaTagHtml" => "string",
        "excludeFromSitemap" => "boolean",
        "sitemapPriority" => "SitemapPriority",
        "searchKeywords" => "string",
        "itemOptionsList" => "ItemOptionsList",
        "isDonationItem" => "boolean",
        "showDefaultDonationAmount" => "boolean",
        "maxDonationAmount" => "float",
        "dontShowPrice" => "boolean",
        "noPriceMessage" => "string",
        "shoppingDotComCategory" => "string",
        "shopzillaCategoryId" => "integer",
        "outOfStockBehavior" => "ItemOutOfStockBehavior",
        "nexTagCategory" => "string",
        "productFeedList" => "ProductFeedList",
        "relatedItemsDescription" => "string",
        "onSpecial" => "boolean",
        "specialsDescription" => "string",
        "featuredDescription" => "string",
        "pricingMatrix" => "PricingMatrix",
        "siteCategoryList" => "SiteCategoryList",
        "memberList" => "ItemMemberList",
        "accountingBookDetailList" => "ItemAccountingBookDetailList",
        "translationsList" => "TranslationList",
        "presentationItemList" => "PresentationItemList",
        "hierarchyVersionsList" => "KitItemHierarchyVersionsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
