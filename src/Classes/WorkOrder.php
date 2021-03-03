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

class WorkOrder extends Record {
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $manufacturingRouting;
    /**
     * @var boolean
     */
    public $autoCalculateLag;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $job;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $assemblyItem;
    /**
     * @var boolean
     */
    public $expandAssembly;
    /**
     * @var boolean
     */
    public $isWip;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billOfMaterials;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $units;
    /**
     * @var string
     */
    public $tranDate;
    /**
     * @var \NetSuite\Classes\WorkOrderOrderStatus
     */
    public $orderStatus;
    /**
     * @var boolean
     */
    public $firmed;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\WorkOrderItemList
     */
    public $itemList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var \NetSuite\Classes\WorkOrderSchedulingMethod
     */
    public $schedulingMethod;
    /**
     * @var \NetSuite\Classes\SalesTeamList
     */
    public $salesTeamList;
    /**
     * @var \NetSuite\Classes\PartnersList
     */
    public $partnersList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $createdFrom;
    /**
     * @var string
     */
    public $sourceTransactionId;
    /**
     * @var integer
     */
    public $sourceTransactionLine;
    /**
     * @var boolean
     */
    public $specialOrder;
    /**
     * @var float
     */
    public $buildable;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $options;
    /**
     * @var float
     */
    public $built;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $revision;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billOfMaterialsRevision;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var string
     */
    public $requestedDate;
    /**
     * @var string
     */
    public $actualProductionStartDate;
    /**
     * @var string
     */
    public $actualProductionEndDate;
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
        "manufacturingRouting" => "RecordRef",
        "autoCalculateLag" => "boolean",
        "status" => "string",
        "tranId" => "string",
        "entity" => "RecordRef",
        "job" => "RecordRef",
        "assemblyItem" => "RecordRef",
        "expandAssembly" => "boolean",
        "isWip" => "boolean",
        "quantity" => "float",
        "billOfMaterials" => "RecordRef",
        "units" => "RecordRef",
        "tranDate" => "dateTime",
        "orderStatus" => "WorkOrderOrderStatus",
        "firmed" => "boolean",
        "memo" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "itemList" => "WorkOrderItemList",
        "location" => "RecordRef",
        "schedulingMethod" => "WorkOrderSchedulingMethod",
        "salesTeamList" => "SalesTeamList",
        "partnersList" => "PartnersList",
        "createdFrom" => "RecordRef",
        "sourceTransactionId" => "string",
        "sourceTransactionLine" => "integer",
        "specialOrder" => "boolean",
        "buildable" => "float",
        "options" => "CustomFieldList",
        "built" => "float",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "revision" => "RecordRef",
        "billOfMaterialsRevision" => "RecordRef",
        "subsidiary" => "RecordRef",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "requestedDate" => "dateTime",
        "actualProductionStartDate" => "dateTime",
        "actualProductionEndDate" => "dateTime",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
