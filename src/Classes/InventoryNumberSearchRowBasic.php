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

class InventoryNumberSearchRowBasic extends SearchRowBasic {
    public $expirationDate;
    public $externalId;
    public $internalId;
    public $inventoryNumber;
    public $isonhand;
    public $item;
    public $location;
    public $memo;
    public $quantityavailable;
    public $quantityintransit;
    public $quantityonhand;
    public $quantityonorder;
    public $customFieldList;
    static $paramtypesmap = array(
        "expirationDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "inventoryNumber" => "SearchColumnStringField[]",
        "isonhand" => "SearchColumnBooleanField[]",
        "item" => "SearchColumnSelectField[]",
        "location" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "quantityavailable" => "SearchColumnDoubleField[]",
        "quantityintransit" => "SearchColumnDoubleField[]",
        "quantityonhand" => "SearchColumnDoubleField[]",
        "quantityonorder" => "SearchColumnDoubleField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
