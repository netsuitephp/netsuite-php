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

class SiteCategory extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $website;
    /**
     * @var string
     */
    public $itemId;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $parentCategory;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $categoryListLayout;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $itemListLayout;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $relatedItemsListLayout;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $correlatedItemsListLayout;
    /**
     * @var boolean
     */
    public $isOnline;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $storeDetailedDescription;
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
     * @var string
     */
    public $urlComponent;
    /**
     * @var \NetSuite\Classes\SitemapPriority
     */
    public $sitemapPriority;
    /**
     * @var string
     */
    public $searchKeywords;
    /**
     * @var \NetSuite\Classes\SiteCategoryPresentationItemList
     */
    public $presentationItemList;
    /**
     * @var \NetSuite\Classes\SiteCategoryTranslationList
     */
    public $translationsList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "website" => "RecordRef",
        "itemId" => "string",
        "parentCategory" => "RecordRef",
        "categoryListLayout" => "RecordRef",
        "itemListLayout" => "RecordRef",
        "relatedItemsListLayout" => "RecordRef",
        "correlatedItemsListLayout" => "RecordRef",
        "isOnline" => "boolean",
        "isInactive" => "boolean",
        "description" => "string",
        "storeDetailedDescription" => "string",
        "storeDisplayThumbnail" => "RecordRef",
        "storeDisplayImage" => "RecordRef",
        "pageTitle" => "string",
        "metaTagHtml" => "string",
        "excludeFromSitemap" => "boolean",
        "urlComponent" => "string",
        "sitemapPriority" => "SitemapPriority",
        "searchKeywords" => "string",
        "presentationItemList" => "SiteCategoryPresentationItemList",
        "translationsList" => "SiteCategoryTranslationList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
