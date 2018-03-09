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

class InventoryAdjustmentInventory {
    public $item;
    public $line;
    public $inventoryDetail;
    public $description;
    public $department;
    public $class;
    public $location;
    public $units;
    public $quantityOnHand;
    public $currentValue;
    public $adjustQtyBy;
    public $binNumbers;
    public $serialNumbers;
    public $newQuantity;
    public $unitCost;
    public $foreignCurrencyUnitCost;
    public $memo;
    public $currency;
    public $expirationDate;
    public $exchangeRate;
    static $paramtypesmap = array(
        "item" => "RecordRef",
        "line" => "integer",
        "inventoryDetail" => "InventoryDetail",
        "description" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "units" => "RecordRef",
        "quantityOnHand" => "float",
        "currentValue" => "float",
        "adjustQtyBy" => "float",
        "binNumbers" => "string",
        "serialNumbers" => "string",
        "newQuantity" => "float",
        "unitCost" => "float",
        "foreignCurrencyUnitCost" => "float",
        "memo" => "string",
        "currency" => "string",
        "expirationDate" => "dateTime",
        "exchangeRate" => "float",
    );
}
