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

class LotNumberedInventoryItemLocations {
    /**
     * @var string
     */
    public $location;
    /**
     * @var float
     */
    public $quantityOnHand;
    /**
     * @var float
     */
    public $onHandValueMli;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var string
     */
    public $expirationDate;
    /**
     * @var float
     */
    public $averageCostMli;
    /**
     * @var float
     */
    public $lastPurchasePriceMli;
    /**
     * @var float
     */
    public $reorderPoint;
    /**
     * @var boolean
     */
    public $locationAllowStorePickup;
    /**
     * @var float
     */
    public $locationStorePickupBufferStock;
    /**
     * @var float
     */
    public $locationQtyAvailForStorePickup;
    /**
     * @var float
     */
    public $preferredStockLevel;
    /**
     * @var integer
     */
    public $leadTime;
    /**
     * @var float
     */
    public $defaultReturnCost;
    /**
     * @var float
     */
    public $safetyStockLevel;
    /**
     * @var float
     */
    public $cost;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $inventoryCostTemplate;
    /**
     * @var float
     */
    public $buildTime;
    /**
     * @var float
     */
    public $fixedBuildTime;
    /**
     * @var float
     */
    public $buildTimeLotSize;
    /**
     * @var string
     */
    public $lastInvtCountDate;
    /**
     * @var string
     */
    public $nextInvtCountDate;
    /**
     * @var boolean
     */
    public $isWip;
    /**
     * @var integer
     */
    public $invtCountInterval;
    /**
     * @var \NetSuite\Classes\ItemInvtClassification
     */
    public $invtClassification;
    /**
     * @var float
     */
    public $costingLotSize;
    /**
     * @var float
     */
    public $quantityOnOrder;
    /**
     * @var float
     */
    public $quantityCommitted;
    /**
     * @var float
     */
    public $quantityAvailable;
    /**
     * @var float
     */
    public $quantityBackOrdered;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $locationId;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $locationlookup;
    /**
     * @var string
     */
    public $location_display;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $supplyReplenishmentMethod;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $alternateDemandSourceItem;
    /**
     * @var float
     */
    public $fixedLotSize;
    /**
     * @var \NetSuite\Classes\PeriodicLotSizeType
     */
    public $periodicLotSizeType;
    /**
     * @var integer
     */
    public $periodicLotSizeDays;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $supplyType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $supplyLotSizingMethod;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $demandSource;
    /**
     * @var integer
     */
    public $backwardConsumptionDays;
    /**
     * @var integer
     */
    public $forwardConsumptionDays;
    /**
     * @var integer
     */
    public $demandTimeFence;
    /**
     * @var integer
     */
    public $supplyTimeFence;
    /**
     * @var integer
     */
    public $rescheduleInDays;
    /**
     * @var integer
     */
    public $rescheduleOutDays;
    static $paramtypesmap = array(
        "location" => "string",
        "quantityOnHand" => "float",
        "onHandValueMli" => "float",
        "serialNumbers" => "string",
        "expirationDate" => "dateTime",
        "averageCostMli" => "float",
        "lastPurchasePriceMli" => "float",
        "reorderPoint" => "float",
        "locationAllowStorePickup" => "boolean",
        "locationStorePickupBufferStock" => "float",
        "locationQtyAvailForStorePickup" => "float",
        "preferredStockLevel" => "float",
        "leadTime" => "integer",
        "defaultReturnCost" => "float",
        "safetyStockLevel" => "float",
        "cost" => "float",
        "inventoryCostTemplate" => "RecordRef",
        "buildTime" => "float",
        "fixedBuildTime" => "float",
        "buildTimeLotSize" => "float",
        "lastInvtCountDate" => "dateTime",
        "nextInvtCountDate" => "dateTime",
        "isWip" => "boolean",
        "invtCountInterval" => "integer",
        "invtClassification" => "ItemInvtClassification",
        "costingLotSize" => "float",
        "quantityOnOrder" => "float",
        "quantityCommitted" => "float",
        "quantityAvailable" => "float",
        "quantityBackOrdered" => "float",
        "locationId" => "RecordRef",
        "locationlookup" => "RecordRef",
        "location_display" => "string",
        "supplyReplenishmentMethod" => "RecordRef",
        "alternateDemandSourceItem" => "RecordRef",
        "fixedLotSize" => "float",
        "periodicLotSizeType" => "PeriodicLotSizeType",
        "periodicLotSizeDays" => "integer",
        "supplyType" => "RecordRef",
        "supplyLotSizingMethod" => "RecordRef",
        "demandSource" => "RecordRef",
        "backwardConsumptionDays" => "integer",
        "forwardConsumptionDays" => "integer",
        "demandTimeFence" => "integer",
        "supplyTimeFence" => "integer",
        "rescheduleInDays" => "integer",
        "rescheduleOutDays" => "integer",
    );
}
