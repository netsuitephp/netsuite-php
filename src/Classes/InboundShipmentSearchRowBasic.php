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

class InboundShipmentSearchRowBasic extends SearchRowBasic {
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
    public $incoterm;
    public $internalId;
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
