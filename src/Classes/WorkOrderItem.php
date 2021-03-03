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

class WorkOrderItem {
    /**
     * @var integer
     */
    public $line;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var integer
     */
    public $operationSequenceNumber;
    /**
     * @var float
     */
    public $componentYield;
    /**
     * @var float
     */
    public $bomQuantity;
    /**
     * @var float
     */
    public $quantityCommitted;
    /**
     * @var float
     */
    public $quantityBackOrdered;
    /**
     * @var float
     */
    public $quantityAvailable;
    /**
     * @var float
     */
    public $averageCost;
    /**
     * @var float
     */
    public $lastPurchasePrice;
    /**
     * @var float
     */
    public $quantityOnHand;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $units;
    /**
     * @var \NetSuite\Classes\InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var float
     */
    public $orderPriority;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $options;
    /**
     * @var \NetSuite\Classes\ItemSource
     */
    public $itemSource;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $poVendor;
    /**
     * @var float
     */
    public $poRate;
    /**
     * @var float
     */
    public $percentComplete;
    /**
     * @var float
     */
    public $contribution;
    /**
     * @var string
     */
    public $description;
    /**
     * @var \NetSuite\Classes\WorkOrderItemItemCommitInventory
     */
    public $commitInventory;
    /**
     * @var string
     */
    public $plannedIssueDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $orderAllocationStrategy;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
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
        "orderAllocationStrategy" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );
}
