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

class BinWorksheetItem {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var string
     */
    public $itemName;
    /**
     * @var string
     */
    public $description;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var string
     */
    public $itemOnHand;
    /**
     * @var string
     */
    public $itemUnitsLabel;
    /**
     * @var \NetSuite\Classes\InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @var string
     */
    public $itemBins;
    /**
     * @var string
     */
    public $itemBinNumbers;
    /**
     * @var string
     */
    public $itemBinList;
    /**
     * @var string
     */
    public $itemPreferBin;
    /**
     * @var string
     */
    public $itemBlank;
    static $paramtypesmap = array(
        "item" => "RecordRef",
        "itemName" => "string",
        "description" => "string",
        "quantity" => "float",
        "itemOnHand" => "string",
        "itemUnitsLabel" => "string",
        "inventoryDetail" => "InventoryDetail",
        "itemBins" => "string",
        "itemBinNumbers" => "string",
        "itemBinList" => "string",
        "itemPreferBin" => "string",
        "itemBlank" => "string",
    );
}
