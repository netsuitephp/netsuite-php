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

class ItemReceiptItem {
    /**
     * @var boolean
     */
    public $itemReceive;
    /**
     * @var string
     */
    public $jobName;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var integer
     */
    public $orderLine;
    /**
     * @var integer
     */
    public $line;
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
    public $location;
    /**
     * @var float
     */
    public $onHand;
    /**
     * @var float
     */
    public $quantityRemaining;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var string
     */
    public $unitsDisplay;
    /**
     * @var float
     */
    public $unitCostOverride;
    /**
     * @var \NetSuite\Classes\InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var string
     */
    public $binNumbers;
    /**
     * @var string
     */
    public $expirationDate;
    /**
     * @var string
     */
    public $rate;
    /**
     * @var string
     */
    public $currency;
    /**
     * @var boolean
     */
    public $restock;
    /**
     * @var \NetSuite\Classes\TransactionBillVarianceStatus
     */
    public $billVarianceStatus;
    /**
     * @var boolean
     */
    public $isDropShipment;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $options;
    /**
     * @var \NetSuite\Classes\LandedCost
     */
    public $landedCost;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "itemReceive" => "boolean",
        "jobName" => "string",
        "item" => "RecordRef",
        "orderLine" => "integer",
        "line" => "integer",
        "itemName" => "string",
        "description" => "string",
        "location" => "RecordRef",
        "onHand" => "float",
        "quantityRemaining" => "float",
        "quantity" => "float",
        "unitsDisplay" => "string",
        "unitCostOverride" => "float",
        "inventoryDetail" => "InventoryDetail",
        "serialNumbers" => "string",
        "binNumbers" => "string",
        "expirationDate" => "dateTime",
        "rate" => "string",
        "currency" => "string",
        "restock" => "boolean",
        "billVarianceStatus" => "TransactionBillVarianceStatus",
        "isDropShipment" => "boolean",
        "options" => "CustomFieldList",
        "landedCost" => "LandedCost",
        "customFieldList" => "CustomFieldList",
    );
}
