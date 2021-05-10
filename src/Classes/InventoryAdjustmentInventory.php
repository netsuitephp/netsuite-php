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

class InventoryAdjustmentInventory {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var integer
     */
    public $line;
    /**
     * @var \NetSuite\Classes\InventoryDetail
     */
    public $inventoryDetail;
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $units;
    /**
     * @var float
     */
    public $quantityOnHand;
    /**
     * @var float
     */
    public $currentValue;
    /**
     * @var float
     */
    public $adjustQtyBy;
    /**
     * @var string
     */
    public $binNumbers;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var float
     */
    public $newQuantity;
    /**
     * @var float
     */
    public $unitCost;
    /**
     * @var float
     */
    public $foreignCurrencyUnitCost;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var string
     */
    public $currency;
    /**
     * @var string
     */
    public $expirationDate;
    /**
     * @var float
     */
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
