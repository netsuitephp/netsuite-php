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

class WorkOrderCompletion extends Record {
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
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
    public $quantity;
    /**
     * @var float
     */
    public $scrapQuantity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $units;
    /**
     * @var boolean
     */
    public $isBackflush;
    /**
     * @var float
     */
    public $orderQuantity;
    /**
     * @var float
     */
    public $total;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $createdFrom;
    /**
     * @var \NetSuite\Classes\InventoryDetail
     */
    public $inventoryDetail;
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
    public $memo;
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
    public $startOperation;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $endOperation;
    /**
     * @var float
     */
    public $completedQuantity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $manufacturingRouting;
    /**
     * @var \NetSuite\Classes\WorkOrderCompletionComponentList
     */
    public $componentList;
    /**
     * @var \NetSuite\Classes\WorkOrderCompletionOperationList
     */
    public $operationList;
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
