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

class InboundShipmentItems {
    public $id;
    public $purchaseOrder;
    public $shipmentItem;
    public $shipmentItemDescription;
    public $poVendor;
    public $receivingLocation;
    public $quantityReceived;
    public $quantityExpected;
    public $quantityRemaining;
    public $unit;
    public $poRate;
    public $expectedRate;
    public $shipmentItemExchangeRate;
    public $shipmentItemEffectiveDate;
    public $unitLandedCost;
    public $totalUnitCost;
    public $shipmentItemAmount;
    public $poCurrency;
    public $incoterm;
    static $paramtypesmap = array(
        "id" => "integer",
        "purchaseOrder" => "RecordRef",
        "shipmentItem" => "RecordRef",
        "shipmentItemDescription" => "string",
        "poVendor" => "string",
        "receivingLocation" => "RecordRef",
        "quantityReceived" => "float",
        "quantityExpected" => "float",
        "quantityRemaining" => "float",
        "unit" => "RecordRef",
        "poRate" => "float",
        "expectedRate" => "float",
        "shipmentItemExchangeRate" => "float",
        "shipmentItemEffectiveDate" => "dateTime",
        "unitLandedCost" => "float",
        "totalUnitCost" => "float",
        "shipmentItemAmount" => "float",
        "poCurrency" => "RecordRef",
        "incoterm" => "RecordRef",
    );
}
