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

class InterCompanyTransferOrderItem {
    public $item;
    public $line;
    public $quantityAvailable;
    public $quantityOnHand;
    public $quantityBackOrdered;
    public $quantityCommitted;
    public $quantityFulfilled;
    public $quantityReceived;
    public $quantity;
    public $rate;
    public $units;
    public $amount;
    public $description;
    public $inventoryDetail;
    public $commitInventory;
    public $options;
    public $department;
    public $class;
    public $lastPurchasePrice;
    public $averageCost;
    public $customFieldList;
    static $paramtypesmap = array(
        "item" => "RecordRef",
        "line" => "integer",
        "quantityAvailable" => "float",
        "quantityOnHand" => "float",
        "quantityBackOrdered" => "float",
        "quantityCommitted" => "float",
        "quantityFulfilled" => "float",
        "quantityReceived" => "float",
        "quantity" => "float",
        "rate" => "float",
        "units" => "RecordRef",
        "amount" => "float",
        "description" => "string",
        "inventoryDetail" => "InventoryDetail",
        "commitInventory" => "TransferOrderItemCommitInventory",
        "options" => "CustomFieldList",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "lastPurchasePrice" => "float",
        "averageCost" => "float",
        "customFieldList" => "CustomFieldList",
    );
}
