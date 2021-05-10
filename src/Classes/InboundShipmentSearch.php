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

class InboundShipmentSearch extends SearchRecord {
    /**
     * @var \NetSuite\Classes\InboundShipmentSearchBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\InventoryDetailSearchBasic
     */
    public $inventoryDetailJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchBasic
     */
    public $itemJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $itemReceiptJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $purchaseOrderJoin;
    /**
     * @var \NetSuite\Classes\VendorSearchBasic
     */
    public $vendorJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchJoin[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "InboundShipmentSearchBasic",
        "inventoryDetailJoin" => "InventoryDetailSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "itemReceiptJoin" => "TransactionSearchBasic",
        "purchaseOrderJoin" => "TransactionSearchBasic",
        "vendorJoin" => "VendorSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
