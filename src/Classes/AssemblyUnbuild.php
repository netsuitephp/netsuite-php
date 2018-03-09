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

class AssemblyUnbuild extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $customForm;
    public $tranDate;
    public $postingPeriod;
    public $tranId;
    public $item;
    public $built;
    public $quantity;
    public $units;
    public $total;
    public $serialNumbers;
    public $inventoryDetail;
    public $binNumbers;
    public $subsidiary;
    public $department;
    public $class;
    public $location;
    public $memo;
    public $componentList;
    public $accountingBookDetailList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "tranId" => "string",
        "item" => "RecordRef",
        "built" => "float",
        "quantity" => "float",
        "units" => "RecordRef",
        "total" => "float",
        "serialNumbers" => "string",
        "inventoryDetail" => "InventoryDetail",
        "binNumbers" => "string",
        "subsidiary" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "memo" => "string",
        "componentList" => "AssemblyComponentList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
