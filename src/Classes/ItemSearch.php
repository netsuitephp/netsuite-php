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

class ItemSearch extends SearchRecord {
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
        "basic" => "ItemSearchBasic",
        "binNumberJoin" => "BinSearchBasic",
        "binOnHandJoin" => "ItemBinNumberSearchBasic",
        "correlatedItemJoin" => "ItemSearchBasic",
        "effectiveRevisionJoin" => "ItemRevisionSearchBasic",
        "fileJoin" => "FileSearchBasic",
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
