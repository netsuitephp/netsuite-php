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

class WorkOrderItem {
    public $line;
    public $item;
    public $operationSequenceNumber;
    public $componentYield;
    public $bomQuantity;
    public $quantityCommitted;
    public $quantityBackOrdered;
    public $quantityAvailable;
    public $averageCost;
    public $lastPurchasePrice;
    public $quantityOnHand;
    public $quantity;
    public $units;
    public $inventoryDetail;
    public $serialNumbers;
    public $orderPriority;
    public $options;
    public $itemSource;
    public $department;
    public $class;
    public $location;
    public $poVendor;
    public $poRate;
    public $percentComplete;
    public $contribution;
    public $description;
    public $commitInventory;
    public $plannedIssueDate;
    public $customFieldList;
    static $paramtypesmap = array(
        "line" => "integer",
        "item" => "RecordRef",
        "operationSequenceNumber" => "integer",
        "componentYield" => "float",
        "bomQuantity" => "float",
        "quantityCommitted" => "float",
        "quantityBackOrdered" => "float",
        "quantityAvailable" => "float",
        "averageCost" => "float",
        "lastPurchasePrice" => "float",
        "quantityOnHand" => "float",
        "quantity" => "float",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "serialNumbers" => "string",
        "orderPriority" => "float",
        "options" => "CustomFieldList",
        "itemSource" => "ItemSource",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "poVendor" => "RecordRef",
        "poRate" => "float",
        "percentComplete" => "float",
        "contribution" => "float",
        "description" => "string",
        "commitInventory" => "WorkOrderItemItemCommitInventory",
        "plannedIssueDate" => "dateTime",
        "customFieldList" => "CustomFieldList",
    );
}
