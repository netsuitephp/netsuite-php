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

class InventoryNumberSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $expirationDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $inventoryNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isonhand;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityavailable;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityintransit;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityonhand;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityonorder;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
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
