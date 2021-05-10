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

class InboundShipmentSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $actualDeliveryDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $actualShippingDate;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $billOfLading;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $description;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $expectedDeliveryDate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $expectedRate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $expectedShippingDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalDocumentNumber;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $incoterm;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $itemEffectiveDate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $itemExchangeRate;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $landedCostAllocationMethod;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $landedCostAmount;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $landedCostCostCategory;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $landedCostCurrency;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $landedCostEffectiveDate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $landedCostExchangeRate;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $poAmount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $poRate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $purchaseOrder;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantityBilled;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantityExpected;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantityReceived;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantityRemaining;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $receivingLocation;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $shipmentBaseCurrency;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $shipmentNumber;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $totalUnitCost;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $unit;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $unitLandedCost;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $vendor;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $vesselNumber;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "actualDeliveryDate" => "SearchDateField",
        "actualShippingDate" => "SearchDateField",
        "billOfLading" => "SearchStringField",
        "createdDate" => "SearchDateField",
        "currency" => "SearchMultiSelectField",
        "description" => "SearchStringField",
        "expectedDeliveryDate" => "SearchDateField",
        "expectedRate" => "SearchDoubleField",
        "expectedShippingDate" => "SearchDateField",
        "externalDocumentNumber" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "incoterm" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "item" => "SearchMultiSelectField",
        "itemEffectiveDate" => "SearchDateField",
        "itemExchangeRate" => "SearchDoubleField",
        "landedCostAllocationMethod" => "SearchEnumMultiSelectField",
        "landedCostAmount" => "SearchDoubleField",
        "landedCostCostCategory" => "SearchMultiSelectField",
        "landedCostCurrency" => "SearchMultiSelectField",
        "landedCostEffectiveDate" => "SearchDateField",
        "landedCostExchangeRate" => "SearchDoubleField",
        "memo" => "SearchStringField",
        "poAmount" => "SearchDoubleField",
        "poRate" => "SearchDoubleField",
        "purchaseOrder" => "SearchMultiSelectField",
        "quantityBilled" => "SearchDoubleField",
        "quantityExpected" => "SearchDoubleField",
        "quantityReceived" => "SearchDoubleField",
        "quantityRemaining" => "SearchDoubleField",
        "receivingLocation" => "SearchMultiSelectField",
        "shipmentBaseCurrency" => "SearchMultiSelectField",
        "shipmentNumber" => "SearchMultiSelectField",
        "status" => "SearchEnumMultiSelectField",
        "totalUnitCost" => "SearchDoubleField",
        "unit" => "SearchMultiSelectField",
        "unitLandedCost" => "SearchDoubleField",
        "vendor" => "SearchMultiSelectField",
        "vesselNumber" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
