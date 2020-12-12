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

class ItemSearch extends SearchRecord {
    /**
     * @var \NetSuite\Classes\ItemSearchBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\RevRecTemplateSearchBasic
     */
    public $accountingBookRevRecScheduleJoin;
    /**
     * @var \NetSuite\Classes\AssemblyItemBomSearchBasic
     */
    public $assemblyItemBillOfMaterialsJoin;
    /**
     * @var \NetSuite\Classes\BinSearchBasic
     */
    public $binNumberJoin;
    /**
     * @var \NetSuite\Classes\ItemBinNumberSearchBasic
     */
    public $binOnHandJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchBasic
     */
    public $correlatedItemJoin;
    /**
     * @var \NetSuite\Classes\ItemRevisionSearchBasic
     */
    public $effectiveRevisionJoin;
    /**
     * @var \NetSuite\Classes\FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var \NetSuite\Classes\MerchandiseHierarchyNodeSearchBasic
     */
    public $hierarchyNodeJoin;
    /**
     * @var \NetSuite\Classes\InventoryDetailSearchBasic
     */
    public $inventoryDetailJoin;
    /**
     * @var \NetSuite\Classes\LocationSearchBasic
     */
    public $inventoryLocationJoin;
    /**
     * @var \NetSuite\Classes\InventoryNumberSearchBasic
     */
    public $inventoryNumberJoin;
    /**
     * @var \NetSuite\Classes\InventoryNumberBinSearchBasic
     */
    public $inventoryNumberBinOnHandJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchBasic
     */
    public $memberItemJoin;
    /**
     * @var \NetSuite\Classes\ItemRevisionSearchBasic
     */
    public $obsoleteRevisionJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchBasic
     */
    public $parentJoin;
    /**
     * @var \NetSuite\Classes\LocationSearchBasic
     */
    public $preferredLocationJoin;
    /**
     * @var \NetSuite\Classes\VendorSearchBasic
     */
    public $preferredVendorJoin;
    /**
     * @var \NetSuite\Classes\PricingSearchBasic
     */
    public $pricingJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchBasic
     */
    public $shopperJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $transactionJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var \NetSuite\Classes\NoteSearchBasic
     */
    public $userNotesJoin;
    /**
     * @var \NetSuite\Classes\VendorSearchBasic
     */
    public $vendorJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchJoin[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "ItemSearchBasic",
        "accountingBookRevRecScheduleJoin" => "RevRecTemplateSearchBasic",
        "assemblyItemBillOfMaterialsJoin" => "AssemblyItemBomSearchBasic",
        "binNumberJoin" => "BinSearchBasic",
        "binOnHandJoin" => "ItemBinNumberSearchBasic",
        "correlatedItemJoin" => "ItemSearchBasic",
        "effectiveRevisionJoin" => "ItemRevisionSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "hierarchyNodeJoin" => "MerchandiseHierarchyNodeSearchBasic",
        "inventoryDetailJoin" => "InventoryDetailSearchBasic",
        "inventoryLocationJoin" => "LocationSearchBasic",
        "inventoryNumberJoin" => "InventoryNumberSearchBasic",
        "inventoryNumberBinOnHandJoin" => "InventoryNumberBinSearchBasic",
        "memberItemJoin" => "ItemSearchBasic",
        "obsoleteRevisionJoin" => "ItemRevisionSearchBasic",
        "parentJoin" => "ItemSearchBasic",
        "preferredLocationJoin" => "LocationSearchBasic",
        "preferredVendorJoin" => "VendorSearchBasic",
        "pricingJoin" => "PricingSearchBasic",
        "shopperJoin" => "CustomerSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "vendorJoin" => "VendorSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
