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

class ItemSearchRow extends SearchRow {
    public $basic;
    public $binNumberJoin;
    public $binOnHandJoin;
    public $correlatedItemJoin;
    public $effectiveRevisionJoin;
    public $fileJoin;
    public $inventoryDetailJoin;
    public $inventoryLocationJoin;
    public $inventoryNumberJoin;
    public $inventoryNumberBinOnHandJoin;
    public $memberItemJoin;
    public $obsoleteRevisionJoin;
    public $parentJoin;
    public $preferredLocationJoin;
    public $preferredVendorJoin;
    public $pricingJoin;
    public $shopperJoin;
    public $transactionJoin;
    public $userJoin;
    public $userNotesJoin;
    public $vendorJoin;
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "ItemSearchRowBasic",
        "binNumberJoin" => "BinSearchRowBasic",
        "binOnHandJoin" => "ItemBinNumberSearchRowBasic",
        "correlatedItemJoin" => "ItemSearchRowBasic",
        "effectiveRevisionJoin" => "ItemRevisionSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
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
