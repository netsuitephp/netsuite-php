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

class InboundShipmentItems {
    /**
     * @var integer
     */
    public $id;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $purchaseOrder;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shipmentItem;
    /**
     * @var string
     */
    public $shipmentItemDescription;
    /**
     * @var string
     */
    public $poVendor;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $receivingLocation;
    /**
     * @var float
     */
    public $quantityReceived;
    /**
     * @var float
     */
    public $quantityExpected;
    /**
     * @var float
     */
    public $quantityRemaining;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $unit;
    /**
     * @var float
     */
    public $poRate;
    /**
     * @var float
     */
    public $expectedRate;
    /**
     * @var float
     */
    public $shipmentItemExchangeRate;
    /**
     * @var string
     */
    public $shipmentItemEffectiveDate;
    /**
     * @var float
     */
    public $unitLandedCost;
    /**
     * @var float
     */
    public $totalUnitCost;
    /**
     * @var float
     */
    public $shipmentItemAmount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $poCurrency;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $incoterm;
    /**
     * @var \NetSuite\Classes\InventoryDetail
     */
    public $inventoryDetail;
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
        "inventoryDetail" => "InventoryDetail",
    );
}
