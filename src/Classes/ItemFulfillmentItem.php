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

class ItemFulfillmentItem {
    public $jobName;
    public $itemReceive;
    public $itemName;
    public $description;
    public $department;
    public $class;
    public $location;
    public $onHand;
    public $quantity;
    public $unitsDisplay;
    public $createPo;
    public $inventoryDetail;
    public $binNumbers;
    public $serialNumbers;
    public $poNum;
    public $item;
    public $orderLine;
    public $quantityRemaining;
    public $options;
    public $shipGroup;
    public $itemIsFulfilled;
    public $shipAddress;
    public $shipMethod;
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
