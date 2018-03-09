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

class InventoryNumberSearchBasic extends SearchRecordBasic {
    public $expirationDate;
    public $externalId;
    public $externalIdString;
    public $internalId;
    public $internalIdNumber;
    public $inventoryNumber;
    public $isOnHand;
    public $item;
    public $location;
    public $memo;
    public $quantityAvailable;
    public $quantityInTransit;
    public $quantityOnHand;
    public $quantityOnOrder;
    public $customFieldList;
    static $paramtypesmap = array(
        "expirationDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "inventoryNumber" => "SearchStringField",
        "isOnHand" => "SearchBooleanField",
        "item" => "SearchMultiSelectField",
        "location" => "SearchMultiSelectField",
        "memo" => "SearchStringField",
        "quantityAvailable" => "SearchDoubleField",
        "quantityInTransit" => "SearchDoubleField",
        "quantityOnHand" => "SearchDoubleField",
        "quantityOnOrder" => "SearchDoubleField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
