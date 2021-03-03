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

class ItemSearchRow extends SearchRow {
    /**
     * @var \NetSuite\Classes\ItemSearchRowBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\RevRecTemplateSearchRowBasic
     */
    public $accountingBookRevRecScheduleJoin;
    /**
     * @var \NetSuite\Classes\AssemblyItemBomSearchRowBasic
     */
    public $assemblyItemBillOfMaterialsJoin;
    /**
     * @var \NetSuite\Classes\BinSearchRowBasic
     */
    public $binNumberJoin;
    /**
     * @var \NetSuite\Classes\ItemBinNumberSearchRowBasic
     */
    public $binOnHandJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchRowBasic
     */
    public $correlatedItemJoin;
    /**
     * @var \NetSuite\Classes\ItemRevisionSearchRowBasic
     */
    public $effectiveRevisionJoin;
    /**
     * @var \NetSuite\Classes\FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @var \NetSuite\Classes\MerchandiseHierarchyNodeSearchRowBasic
     */
    public $hierarchyNodeJoin;
    /**
     * @var \NetSuite\Classes\InventoryDetailSearchRowBasic
     */
    public $inventoryDetailJoin;
    /**
     * @var \NetSuite\Classes\LocationSearchRowBasic
     */
    public $inventoryLocationJoin;
    /**
     * @var \NetSuite\Classes\InventoryNumberSearchRowBasic
     */
    public $inventoryNumberJoin;
    /**
     * @var \NetSuite\Classes\InventoryNumberBinSearchRowBasic
     */
    public $inventoryNumberBinOnHandJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchRowBasic
     */
    public $memberItemJoin;
    /**
     * @var \NetSuite\Classes\ItemRevisionSearchRowBasic
     */
    public $obsoleteRevisionJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchRowBasic
     */
    public $parentJoin;
    /**
     * @var \NetSuite\Classes\LocationSearchRowBasic
     */
    public $preferredLocationJoin;
    /**
     * @var \NetSuite\Classes\VendorSearchRowBasic
     */
    public $preferredVendorJoin;
    /**
     * @var \NetSuite\Classes\PricingSearchRowBasic
     */
    public $pricingJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchRowBasic
     */
    public $shopperJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $transactionJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var \NetSuite\Classes\NoteSearchRowBasic
     */
    public $userNotesJoin;
    /**
     * @var \NetSuite\Classes\VendorSearchRowBasic
     */
    public $vendorJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchRowBasic[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "ItemSearchRowBasic",
        "accountingBookRevRecScheduleJoin" => "RevRecTemplateSearchRowBasic",
        "assemblyItemBillOfMaterialsJoin" => "AssemblyItemBomSearchRowBasic",
        "binNumberJoin" => "BinSearchRowBasic",
        "binOnHandJoin" => "ItemBinNumberSearchRowBasic",
        "correlatedItemJoin" => "ItemSearchRowBasic",
        "effectiveRevisionJoin" => "ItemRevisionSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "hierarchyNodeJoin" => "MerchandiseHierarchyNodeSearchRowBasic",
        "inventoryDetailJoin" => "InventoryDetailSearchRowBasic",
        "inventoryLocationJoin" => "LocationSearchRowBasic",
        "inventoryNumberJoin" => "InventoryNumberSearchRowBasic",
        "inventoryNumberBinOnHandJoin" => "InventoryNumberBinSearchRowBasic",
        "memberItemJoin" => "ItemSearchRowBasic",
        "obsoleteRevisionJoin" => "ItemRevisionSearchRowBasic",
        "parentJoin" => "ItemSearchRowBasic",
        "preferredLocationJoin" => "LocationSearchRowBasic",
        "preferredVendorJoin" => "VendorSearchRowBasic",
        "pricingJoin" => "PricingSearchRowBasic",
        "shopperJoin" => "CustomerSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "vendorJoin" => "VendorSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
