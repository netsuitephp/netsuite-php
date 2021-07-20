<?php
/**
 * This file is part of the netsuitephp/netsuite-php library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/netsuitephp/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/netsuitephp/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 */

namespace NetSuite\Classes;

class OtherChargeResaleItem extends Record {
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var string
     */
    public $purchaseDescription;
    /**
     * @var boolean
     */
    public $manufacturingChargeItem;
    /**
     * @var float
     */
    public $cost;
    /**
     * @var string
     */
    public $costUnits;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $expenseAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $intercoExpenseAccount;
    /**
     * @var string
     */
    public $salesDescription;
    /**
     * @var boolean
     */
    public $includeChildren;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $incomeAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $intercoIncomeAccount;
    /**
     * @var boolean
     */
    public $isTaxable;
    /**
     * @var \NetSuite\Classes\ItemMatrixType
     */
    public $matrixType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxSchedule;
    /**
     * @var \NetSuite\Classes\ItemCostEstimateType
     */
    public $costEstimateType;
    /**
     * @var float
     */
    public $costEstimate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $unitsType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $purchaseUnit;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $saleUnit;
    /**
     * @var string
     */
    public $costEstimateUnits;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $issueProduct;
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
    public $intercoDefRevAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $revRecSchedule;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $deferralAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $amortizationTemplate;
    /**
     * @var string
     */
    public $residual;
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
     * @var integer
     */
    public $amortizationPeriod;
    /**
     * @var integer
     */
    public $minimumQuantity;
    /**
     * @var string
     */
    public $minimumQuantityUnits;
    /**
     * @var boolean
     */
    public $enforceMinQtyInternally;
    /**
     * @var integer
     */
    public $maximumQuantity;
    /**
     * @var string
     */
    public $softDescriptor;
    /**
     * @var boolean
     */
    public $isFulfillable;
    /**
     * @var boolean
     */
    public $generateAccruals;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $costCategory;
    /**
     * @var float
     */
    public $purchaseOrderQuantity;
    /**
     * @var float
     */
    public $purchaseOrderAmount;
    /**
     * @var float
     */
    public $purchaseOrderQuantityDiff;
    /**
     * @var float
     */
    public $receiptQuantity;
    /**
     * @var float
     */
    public $receiptAmount;
    /**
     * @var float
     */
    public $receiptQuantityDiff;
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
     * @var \NetSuite\Classes\ItemOverallQuantityPricingType
     */
    public $overallQuantityPricingType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $pricingGroup;
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
     * @var string
     */
    public $vendorName;
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
     * @var string
     */
    public $matrixItemNameTemplate;
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
     * @var string
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\ItemOptionsList
     */
    public $itemOptionsList;
    /**
     * @var \NetSuite\Classes\MatrixOptionList
     */
    public $matrixOptionList;
    /**
     * @var \NetSuite\Classes\ItemVendorList
     */
    public $itemVendorList;
    /**
     * @var \NetSuite\Classes\PricingMatrix
     */
    public $pricingMatrix;
    /**
     * @var \NetSuite\Classes\ItemAccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $purchaseTaxCode;
    /**
     * @var float
     */
    public $rate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesTaxCode;
    /**
     * @var \NetSuite\Classes\TranslationList
     */
    public $translationsList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $vendor;
    /**
     * @var \NetSuite\Classes\OtherChargeResaleItemHierarchyVersionsList
     */
    public $hierarchyVersionsList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $consumptionUnit;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billQtyVarianceAcct;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billPriceVarianceAcct;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billExchRateVarianceAcct;
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
        "intercoDefRevAccount" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "deferralAccount" => "RecordRef",
        "amortizationTemplate" => "RecordRef",
        "residual" => "string",
        "deferRevRec" => "boolean",
        "revenueRecognitionRule" => "RecordRef",
        "revRecForecastRule" => "RecordRef",
        "revenueAllocationGroup" => "RecordRef",
        "createRevenuePlansOn" => "RecordRef",
        "directRevenuePosting" => "boolean",
        "contingentRevenueHandling" => "boolean",
        "revReclassFXAccount" => "RecordRef",
        "amortizationPeriod" => "integer",
        "minimumQuantity" => "integer",
        "minimumQuantityUnits" => "string",
        "enforceMinQtyInternally" => "boolean",
        "maximumQuantity" => "integer",
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
        "matrixItemNameTemplate" => "string",
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
        "itemRevenueCategory" => "RecordRef",
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
        "hierarchyVersionsList" => "OtherChargeResaleItemHierarchyVersionsList",
        "consumptionUnit" => "RecordRef",
        "billQtyVarianceAcct" => "RecordRef",
        "billPriceVarianceAcct" => "RecordRef",
        "billExchRateVarianceAcct" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
