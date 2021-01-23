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

class ItemFulfillmentItem {
    /**
     * @var string
     */
    public $jobName;
    /**
     * @var boolean
     */
    public $itemReceive;
    /**
     * @var string
     */
    public $itemName;
    /**
     * @var string
     */
    public $description;
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
     * @var float
     */
    public $onHand;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var string
     */
    public $unitsDisplay;
    /**
     * @var string
     */
    public $createPo;
    /**
     * @var \NetSuite\Classes\InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @var string
     */
    public $binNumbers;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var string
     */
    public $poNum;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var integer
     */
    public $orderLine;
    /**
     * @var float
     */
    public $quantityRemaining;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $options;
    /**
     * @var integer
     */
    public $shipGroup;
    /**
     * @var boolean
     */
    public $itemIsFulfilled;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shipAddress;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shipMethod;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "jobName" => "string",
        "itemReceive" => "boolean",
        "itemName" => "string",
        "description" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "onHand" => "float",
        "quantity" => "float",
        "unitsDisplay" => "string",
        "createPo" => "string",
        "inventoryDetail" => "InventoryDetail",
        "binNumbers" => "string",
        "serialNumbers" => "string",
        "poNum" => "string",
        "item" => "RecordRef",
        "orderLine" => "integer",
        "quantityRemaining" => "float",
        "options" => "CustomFieldList",
        "shipGroup" => "integer",
        "itemIsFulfilled" => "boolean",
        "shipAddress" => "RecordRef",
        "shipMethod" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );
}
