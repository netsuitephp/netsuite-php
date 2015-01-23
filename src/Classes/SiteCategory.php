<?php

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

