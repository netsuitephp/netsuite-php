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
 * generated:  2017-08-01 09:12:52 PM UTC
 */

namespace NetSuite\Classes;

class TransferOrderItem {
    public $item;
    public $line;
    public $quantityAvailable;
    public $quantityOnHand;
    public $quantityBackOrdered;
    public $quantityCommitted;
    public $quantityFulfilled;
    public $quantityPacked;
    public $quantityPicked;
    public $quantityReceived;
    public $quantity;
    public $rate;
    public $units;
    public $amount;
    public $description;
    public $inventoryDetail;
    public $serialNumbers;
    public $commitInventory;
    public $orderPriority;
    public $options;
    public $isClosed;
    public $department;
    public $class;
    public $lastPurchasePrice;
    public $averageCost;
    public $expectedShipDate;
    public $expectedReceiptDate;
    public $customFieldList;
    static $paramtypesmap = array(
        "item" => "RecordRef",
        "line" => "integer",
        "quantityAvailable" => "float",
        "quantityOnHand" => "float",
        "quantityBackOrdered" => "float",
        "quantityCommitted" => "float",
        "quantityFulfilled" => "float",
        "quantityPacked" => "float",
        "quantityPicked" => "float",
        "quantityReceived" => "float",
        "quantity" => "float",
        "rate" => "float",
        "units" => "RecordRef",
        "amount" => "float",
        "description" => "string",
        "inventoryDetail" => "InventoryDetail",
        "serialNumbers" => "string",
        "commitInventory" => "TransferOrderItemCommitInventory",
        "orderPriority" => "float",
        "options" => "CustomFieldList",
        "isClosed" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "lastPurchasePrice" => "float",
        "averageCost" => "float",
        "expectedShipDate" => "dateTime",
        "expectedReceiptDate" => "dateTime",
        "customFieldList" => "CustomFieldList",
    );
}
