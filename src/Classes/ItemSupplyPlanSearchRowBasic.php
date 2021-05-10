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

class ItemSupplyPlanSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $orderCreated;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $orderDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $orderType;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantity;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityUom;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $receiptDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $units;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "item" => "SearchColumnSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "location" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "orderCreated" => "SearchColumnBooleanField[]",
        "orderDate" => "SearchColumnDateField[]",
        "orderType" => "SearchColumnSelectField[]",
        "quantity" => "SearchColumnDoubleField[]",
        "quantityUom" => "SearchColumnDoubleField[]",
        "receiptDate" => "SearchColumnDateField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "units" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
