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

class InventoryNumberSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $expirationDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $inventoryNumber;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isOnHand;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantityAvailable;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantityInTransit;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantityOnHand;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantityOnOrder;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
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
