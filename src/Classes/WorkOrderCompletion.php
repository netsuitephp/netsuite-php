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

class WorkOrderCompletion extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $customForm;
    public $tranId;
    public $item;
    public $quantity;
    public $scrapQuantity;
    public $units;
    public $isBackflush;
    public $orderQuantity;
    public $total;
    public $createdFrom;
    public $inventoryDetail;
    public $tranDate;
    public $postingPeriod;
    public $memo;
    public $subsidiary;
    public $department;
    public $class;
    public $location;
    public $revision;
    public $startOperation;
    public $endOperation;
    public $completedQuantity;
    public $manufacturingRouting;
    public $componentList;
    public $operationList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "tranId" => "string",
        "item" => "RecordRef",
        "quantity" => "float",
        "scrapQuantity" => "float",
        "units" => "RecordRef",
        "isBackflush" => "boolean",
        "orderQuantity" => "float",
        "total" => "float",
        "createdFrom" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "memo" => "string",
        "subsidiary" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "revision" => "RecordRef",
        "startOperation" => "RecordRef",
        "endOperation" => "RecordRef",
        "completedQuantity" => "float",
        "manufacturingRouting" => "RecordRef",
        "componentList" => "WorkOrderCompletionComponentList",
        "operationList" => "WorkOrderCompletionOperationList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
