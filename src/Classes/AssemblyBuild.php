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

class AssemblyBuild extends Record {
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $expirationDate;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $createdFrom;
    /**
     * @var string
     */
    public $tranDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $postingPeriod;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var float
     */
    public $buildable;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $units;
    /**
     * @var float
     */
    public $total;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billOfMaterials;
    /**
     * @var \NetSuite\Classes\InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var string
     */
    public $binNumbers;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $revision;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billOfMaterialsRevision;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\AssemblyComponentList
     */
    public $componentList;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "expirationDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "createdFrom" => "RecordRef",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "tranId" => "string",
        "item" => "RecordRef",
        "buildable" => "float",
        "quantity" => "float",
        "units" => "RecordRef",
        "total" => "float",
        "billOfMaterials" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "serialNumbers" => "string",
        "binNumbers" => "string",
        "subsidiary" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "revision" => "RecordRef",
        "billOfMaterialsRevision" => "RecordRef",
        "memo" => "string",
        "componentList" => "AssemblyComponentList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
