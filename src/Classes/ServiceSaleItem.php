<?php

class ServiceSaleItem extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $salesDescription;
	public $includeChildren;
	public $incomeAccount;
	public $isTaxable;
	public $matrixType;
	public $taxSchedule;
	public $costEstimateType;
	public $costEstimate;
	public $unitsType;
	public $saleUnit;
	public $issueProduct;
	public $costEstimateUnits;
	public $billingSchedule;
	public $deferredRevenueAccount;
	public $revRecSchedule;
	public $minimumQuantity;
	public $enforceMinQtyInternally;
	public $softDescriptor;
	public $pricesIncludeTax;
	public $quantityPricingSchedule;
	public $useMarginalRates;
	public $overallQuantityPricingType;
	public $isFulfillable;
	public $costCategory;
	public $pricingGroup;
	public $minimumQuantityUnits;
	public $vsoePrice;
	public $vsoeSopGroup;
	public $vsoeDeferral;
	public $vsoePermitDiscount;
	public $vsoeDelivered;
	public $deferRevRec;
	public $createJob;
	public $storeDisplayName;
	public $storeDisplayThumbnail;
	public $storeDisplayImage;
	public $storeDescription;
	public $storeDetailedDescription;
	public $storeItemTemplate;
	public $pageTitle;
	public $urlComponent;
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
	public $relatedItemsDescription;
	public $specialsDescription;
	public $itemTaskTemplatesList;
	public $featuredDescription;
	public $customForm;
	public $itemId;
	public $upcCode;
	public $displayName;
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
	public $billingRatesMatrix;
	public $accountingBookDetailList;
	public $itemOptionsList;
	public $matrixOptionList;
	public $pricingMatrix;
	public $purchaseTaxCode;
	public $rate;
	public $salesTaxCode;
	public $siteCategoryList;
	public $translationsList;
	public $presentationItemList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"salesDescription" => "string",
		"includeChildren" => "boolean",
		"incomeAccount" => "RecordRef",
		"isTaxable" => "boolean",
		"matrixType" => "ItemMatrixType",
		"taxSchedule" => "RecordRef",
		"costEstimateType" => "ItemCostEstimateType",
		"costEstimate" => "float",
		"unitsType" => "RecordRef",
		"saleUnit" => "RecordRef",
		"issueProduct" => "RecordRef",
		"costEstimateUnits" => "string",
		"billingSchedule" => "RecordRef",
		"deferredRevenueAccount" => "RecordRef",
		"revRecSchedule" => "RecordRef",
		"minimumQuantity" => "integer",
		"enforceMinQtyInternally" => "boolean",
		"softDescriptor" => "string",
		"pricesIncludeTax" => "boolean",
		"quantityPricingSchedule" => "RecordRef",
		"useMarginalRates" => "boolean",
		"overallQuantityPricingType" => "ItemOverallQuantityPricingType",
		"isFulfillable" => "boolean",
		"costCategory" => "RecordRef",
		"pricingGroup" => "RecordRef",
		"minimumQuantityUnits" => "string",
		"vsoePrice" => "float",
		"vsoeSopGroup" => "VsoeSopGroup",
		"vsoeDeferral" => "VsoeDeferral",
		"vsoePermitDiscount" => "VsoePermitDiscount",
		"vsoeDelivered" => "boolean",
		"deferRevRec" => "boolean",
		"createJob" => "boolean",
		"storeDisplayName" => "string",
		"storeDisplayThumbnail" => "RecordRef",
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
		"isDonationItem" => "boolean",
		"showDefaultDonationAmount" => "boolean",
		"maxDonationAmount" => "float",
		"dontShowPrice" => "boolean",
		"noPriceMessage" => "string",
		"outOfStockMessage" => "string",
		"onSpecial" => "boolean",
		"outOfStockBehavior" => "ItemOutOfStockBehavior",
		"relatedItemsDescription" => "string",
		"specialsDescription" => "string",
		"itemTaskTemplatesList" => "ServiceItemTaskTemplatesList",
		"featuredDescription" => "string",
		"customForm" => "RecordRef",
		"itemId" => "string",
		"upcCode" => "string",
		"displayName" => "string",
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
		"billingRatesMatrix" => "BillingRatesMatrix",
		"accountingBookDetailList" => "ItemAccountingBookDetailList",
		"itemOptionsList" => "ItemOptionsList",
		"matrixOptionList" => "MatrixOptionList",
		"pricingMatrix" => "PricingMatrix",
		"purchaseTaxCode" => "RecordRef",
		"rate" => "float",
		"salesTaxCode" => "RecordRef",
		"siteCategoryList" => "SiteCategoryList",
		"translationsList" => "TranslationList",
		"presentationItemList" => "PresentationItemList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

