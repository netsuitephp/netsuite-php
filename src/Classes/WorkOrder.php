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

class WorkOrder extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $customForm;
    public $manufacturingRouting;
    public $autoCalculateLag;
    public $status;
    public $tranId;
    public $entity;
    public $job;
    public $assemblyItem;
    public $expandAssembly;
    public $isWip;
    public $quantity;
    public $units;
    public $tranDate;
    public $orderStatus;
    public $firmed;
    public $memo;
    public $department;
    public $class;
    public $itemList;
    public $location;
    public $schedulingMethod;
    public $salesTeamList;
    public $partnersList;
    public $createdFrom;
    public $sourceTransactionId;
    public $sourceTransactionLine;
    public $specialOrder;
    public $buildable;
    public $options;
    public $built;
    public $startDate;
    public $endDate;
    public $revision;
    public $subsidiary;
    public $accountingBookDetailList;
    public $customFieldList;
    public $internalId;
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
        "subsidiary" => "RecordRef",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
