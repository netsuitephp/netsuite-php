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

class TransferOrderItem {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var integer
     */
    public $line;
    /**
     * @var float
     */
    public $quantityAvailable;
    /**
     * @var float
     */
    public $quantityOnHand;
    /**
     * @var float
     */
    public $quantityBackOrdered;
    /**
     * @var float
     */
    public $quantityCommitted;
    /**
     * @var float
     */
    public $quantityFulfilled;
    /**
     * @var float
     */
    public $quantityPacked;
    /**
     * @var float
     */
    public $quantityPicked;
    /**
     * @var float
     */
    public $quantityReceived;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var float
     */
    public $rate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $units;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var string
     */
    public $description;
    /**
     * @var \NetSuite\Classes\InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var \NetSuite\Classes\TransferOrderItemCommitInventory
     */
    public $commitInventory;
    /**
     * @var float
     */
    public $orderPriority;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $options;
    /**
     * @var boolean
     */
    public $isClosed;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var float
     */
    public $lastPurchasePrice;
    /**
     * @var float
     */
    public $averageCost;
    /**
     * @var string
     */
    public $expectedShipDate;
    /**
     * @var string
     */
    public $expectedReceiptDate;
    /**
     * @var string
     */
    public $requestedDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $orderAllocationStrategy;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
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
        "requestedDate" => "dateTime",
        "orderAllocationStrategy" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );
}
