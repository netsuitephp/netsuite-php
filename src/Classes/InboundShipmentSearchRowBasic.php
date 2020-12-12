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

class InboundShipmentSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $actualDeliveryDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $actualShippingDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billOfLading;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $description;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $expectedDeliveryDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $expectedRate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $expectedShippingDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $externalDocumentNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $incoterm;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $itemEffectiveDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $itemExchangeRate;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $landedCostAllocationMethod;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $landedCostAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $landedCostCostCategory;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $landedCostCurrency;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $landedCostEffectiveDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $landedCostExchangeRate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $poAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $poRate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $purchaseOrder;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityBilled;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityExpected;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityReceived;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityRemaining;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $receivingLocation;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $shipmentBaseCurrency;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipmentNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $totalUnitCost;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $unit;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $unitLandedCost;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $vendor;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $vesselNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "actualDeliveryDate" => "SearchColumnDateField[]",
        "actualShippingDate" => "SearchColumnDateField[]",
        "billOfLading" => "SearchColumnStringField[]",
        "createdDate" => "SearchColumnDateField[]",
        "currency" => "SearchColumnSelectField[]",
        "description" => "SearchColumnStringField[]",
        "expectedDeliveryDate" => "SearchColumnDateField[]",
        "expectedRate" => "SearchColumnDoubleField[]",
        "expectedShippingDate" => "SearchColumnDateField[]",
        "externalDocumentNumber" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "incoterm" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "item" => "SearchColumnSelectField[]",
        "itemEffectiveDate" => "SearchColumnDateField[]",
        "itemExchangeRate" => "SearchColumnDoubleField[]",
        "landedCostAllocationMethod" => "SearchColumnEnumSelectField[]",
        "landedCostAmount" => "SearchColumnDoubleField[]",
        "landedCostCostCategory" => "SearchColumnSelectField[]",
        "landedCostCurrency" => "SearchColumnSelectField[]",
        "landedCostEffectiveDate" => "SearchColumnDateField[]",
        "landedCostExchangeRate" => "SearchColumnDoubleField[]",
        "memo" => "SearchColumnStringField[]",
        "poAmount" => "SearchColumnDoubleField[]",
        "poRate" => "SearchColumnDoubleField[]",
        "purchaseOrder" => "SearchColumnSelectField[]",
        "quantityBilled" => "SearchColumnDoubleField[]",
        "quantityExpected" => "SearchColumnDoubleField[]",
        "quantityReceived" => "SearchColumnDoubleField[]",
        "quantityRemaining" => "SearchColumnDoubleField[]",
        "receivingLocation" => "SearchColumnSelectField[]",
        "shipmentBaseCurrency" => "SearchColumnSelectField[]",
        "shipmentNumber" => "SearchColumnStringField[]",
        "status" => "SearchColumnStringField[]",
        "totalUnitCost" => "SearchColumnDoubleField[]",
        "unit" => "SearchColumnSelectField[]",
        "unitLandedCost" => "SearchColumnDoubleField[]",
        "vendor" => "SearchColumnSelectField[]",
        "vesselNumber" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
