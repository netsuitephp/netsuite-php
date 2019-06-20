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
 * generated:  2019-06-12 10:27:00 AM PDT
 */

namespace NetSuite\Classes;

class InboundShipmentSearchBasic extends SearchRecordBasic {
    public $actualDeliveryDate;
    public $actualShippingDate;
    public $billOfLading;
    public $createdDate;
    public $currency;
    public $description;
    public $expectedDeliveryDate;
    public $expectedRate;
    public $expectedShippingDate;
    public $externalDocumentNumber;
    public $externalId;
    public $externalIdString;
    public $incoterm;
    public $internalId;
    public $internalIdNumber;
    public $item;
    public $itemEffectiveDate;
    public $itemExchangeRate;
    public $landedCostAllocationMethod;
    public $landedCostAmount;
    public $landedCostCostCategory;
    public $landedCostCurrency;
    public $landedCostEffectiveDate;
    public $landedCostExchangeRate;
    public $memo;
    public $poAmount;
    public $poRate;
    public $purchaseOrder;
    public $quantityBilled;
    public $quantityExpected;
    public $quantityReceived;
    public $quantityRemaining;
    public $receivingLocation;
    public $shipmentBaseCurrency;
    public $shipmentNumber;
    public $status;
    public $totalUnitCost;
    public $unit;
    public $unitLandedCost;
    public $vendor;
    public $vesselNumber;
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
