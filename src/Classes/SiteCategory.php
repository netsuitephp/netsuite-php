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

class SiteCategory extends Record {
    public $website;
    public $itemId;
    public $parentCategory;
    public $categoryListLayout;
    public $itemListLayout;
    public $relatedItemsListLayout;
    public $correlatedItemsListLayout;
    public $isOnline;
    public $isInactive;
    public $description;
    public $storeDetailedDescription;
    public $storeDisplayThumbnail;
    public $storeDisplayImage;
    public $pageTitle;
    public $metaTagHtml;
    public $excludeFromSitemap;
    public $urlComponent;
    public $sitemapPriority;
    public $searchKeywords;
    public $presentationItemList;
    public $translationsList;
    public $internalId;
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
