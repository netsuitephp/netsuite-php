<?php namespace Fungku\NetSuite\Classes;

class OtherChargeResaleItem extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $purchaseDescription;
	public $manufacturingChargeItem;
	public $cost;
	public $costUnits;
	public $expenseAccount;
	public $intercoExpenseAccount;
	public $salesDescription;
	public $includeChildren;
	public $incomeAccount;
	public $intercoIncomeAccount;
	public $isTaxable;
	public $matrixType;
	public $taxSchedule;
	public $costEstimateType;
	public $costEstimate;
	public $unitsType;
	public $purchaseUnit;
	public $saleUnit;
	public $costEstimateUnits;
	public $issueProduct;
	public $billingSchedule;
	public $deferredRevenueAccount;
	public $revRecSchedule;
	public $deferralAccount;
	public $amortizationTemplate;
	public $residual;
	public $deferRevRec;
	public $amortizationPeriod;
	public $minimumQuantity;
	public $minimumQuantityUnits;
	public $enforceMinQtyInternally;
	public $softDescriptor;
	public $isFulfillable;
	public $generateAccruals;
	public $costCategory;
	public $purchaseOrderQuantity;
	public $purchaseOrderAmount;
	public $purchaseOrderQuantityDiff;
	public $receiptQuantity;
	public $receiptAmount;
	public $receiptQuantityDiff;
	public $pricesIncludeTax;
	public $quantityPricingSchedule;
	public $useMarginalRates;
	public $overallQuantityPricingType;
	public $pricingGroup;
	public $customForm;
	public $itemId;
	public $upcCode;
	public $displayName;
	public $vendorName;
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
	public $vsoePrice;
	public $vsoeSopGroup;
	public $vsoeDeferral;
	public $vsoePermitDiscount;
	public $vsoeDelivered;
	public $currency;
	public $itemOptionsList;
	public $matrixOptionList;
	public $itemVendorList;
	public $pricingMatrix;
	public $accountingBookDetailList;
	public $purchaseTaxCode;
	public $rate;
	public $salesTaxCode;
	public $translationsList;
	public $vendor;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"purchaseDescription" => "string",
		"manufacturingChargeItem" => "boolean",
		"cost" => "float",
		"costUnits" => "string",
		"expenseAccount" => "RecordRef",
		"intercoExpenseAccount" => "RecordRef",
		"salesDescription" => "string",
		"includeChildren" => "boolean",
		"incomeAccount" => "RecordRef",
		"intercoIncomeAccount" => "RecordRef",
		"isTaxable" => "boolean",
		"matrixType" => "ItemMatrixType",
		"taxSchedule" => "RecordRef",
		"costEstimateType" => "ItemCostEstimateType",
		"costEstimate" => "float",
		"unitsType" => "RecordRef",
		"purchaseUnit" => "RecordRef",
		"saleUnit" => "RecordRef",
		"costEstimateUnits" => "string",
		"issueProduct" => "RecordRef",
		"billingSchedule" => "RecordRef",
		"deferredRevenueAccount" => "RecordRef",
		"revRecSchedule" => "RecordRef",
		"deferralAccount" => "RecordRef",
		"amortizationTemplate" => "RecordRef",
		"residual" => "string",
		"deferRevRec" => "boolean",
		"amortizationPeriod" => "integer",
		"minimumQuantity" => "integer",
		"minimumQuantityUnits" => "string",
		"enforceMinQtyInternally" => "boolean",
		"softDescriptor" => "string",
		"isFulfillable" => "boolean",
		"generateAccruals" => "boolean",
		"costCategory" => "RecordRef",
		"purchaseOrderQuantity" => "float",
		"purchaseOrderAmount" => "float",
		"purchaseOrderQuantityDiff" => "float",
		"receiptQuantity" => "float",
		"receiptAmount" => "float",
		"receiptQuantityDiff" => "float",
		"pricesIncludeTax" => "boolean",
		"quantityPricingSchedule" => "RecordRef",
		"useMarginalRates" => "boolean",
		"overallQuantityPricingType" => "ItemOverallQuantityPricingType",
		"pricingGroup" => "RecordRef",
		"customForm" => "RecordRef",
		"itemId" => "string",
		"upcCode" => "string",
		"displayName" => "string",
		"vendorName" => "string",
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
		"vsoePrice" => "float",
		"vsoeSopGroup" => "VsoeSopGroup",
		"vsoeDeferral" => "VsoeDeferral",
		"vsoePermitDiscount" => "VsoePermitDiscount",
		"vsoeDelivered" => "boolean",
		"currency" => "string",
		"itemOptionsList" => "ItemOptionsList",
		"matrixOptionList" => "MatrixOptionList",
		"itemVendorList" => "ItemVendorList",
		"pricingMatrix" => "PricingMatrix",
		"accountingBookDetailList" => "ItemAccountingBookDetailList",
		"purchaseTaxCode" => "RecordRef",
		"rate" => "float",
		"salesTaxCode" => "RecordRef",
		"translationsList" => "TranslationList",
		"vendor" => "RecordRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

