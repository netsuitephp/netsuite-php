<?php

class OtherChargeSaleItem extends Record {
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
	public $minimumQuantityUnits;
	public $enforceMinQtyInternally;
	public $softDescriptor;
	public $isFulfillable;
	public $costCategory;
	public $pricesIncludeTax;
	public $quantityPricingSchedule;
	public $useMarginalRates;
	public $overallQuantityPricingType;
	public $pricingGroup;
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
	public $vsoePrice;
	public $vsoeSopGroup;
	public $vsoeDeferral;
	public $vsoePermitDiscount;
	public $vsoeDelivered;
	public $deferRevRec;
	public $subsidiaryList;
	public $itemOptionsList;
	public $matrixOptionList;
	public $pricingMatrix;
	public $accountingBookDetailList;
	public $purchaseTaxCode;
	public $rate;
	public $salesTaxCode;
	public $translationsList;
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
		"minimumQuantityUnits" => "string",
		"enforceMinQtyInternally" => "boolean",
		"softDescriptor" => "string",
		"isFulfillable" => "boolean",
		"costCategory" => "RecordRef",
		"pricesIncludeTax" => "boolean",
		"quantityPricingSchedule" => "RecordRef",
		"useMarginalRates" => "boolean",
		"overallQuantityPricingType" => "ItemOverallQuantityPricingType",
		"pricingGroup" => "RecordRef",
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
		"vsoePrice" => "float",
		"vsoeSopGroup" => "VsoeSopGroup",
		"vsoeDeferral" => "VsoeDeferral",
		"vsoePermitDiscount" => "VsoePermitDiscount",
		"vsoeDelivered" => "boolean",
		"deferRevRec" => "boolean",
		"subsidiaryList" => "RecordRefList",
		"itemOptionsList" => "ItemOptionsList",
		"matrixOptionList" => "MatrixOptionList",
		"pricingMatrix" => "PricingMatrix",
		"accountingBookDetailList" => "ItemAccountingBookDetailList",
		"purchaseTaxCode" => "RecordRef",
		"rate" => "float",
		"salesTaxCode" => "RecordRef",
		"translationsList" => "TranslationList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

