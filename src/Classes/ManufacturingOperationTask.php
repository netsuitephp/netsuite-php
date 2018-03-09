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

class ManufacturingOperationTask extends Record {
    public $customForm;
    public $manufacturingWorkCenter;
    public $manufacturingCostTemplate;
    public $title;
    public $operationSequence;
    public $workOrder;
    public $order;
    public $status;
    public $message;
    public $estimatedWork;
    public $actualWork;
    public $remainingWork;
    public $inputQuantity;
    public $completedQuantity;
    public $setupTime;
    public $runRate;
    public $startDate;
    public $endDate;
    public $autoCalculateLag;
    public $machineResources;
    public $laborResources;
    public $costDetailList;
    public $predecessorList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "customForm" => "RecordRef",
        "manufacturingWorkCenter" => "RecordRef",
        "manufacturingCostTemplate" => "RecordRef",
        "title" => "string",
        "operationSequence" => "integer",
        "workOrder" => "RecordRef",
        "order" => "RecordRef",
        "status" => "ManufacturingOperationTaskStatus",
        "message" => "string",
        "estimatedWork" => "float",
        "actualWork" => "float",
        "remainingWork" => "float",
        "inputQuantity" => "float",
        "completedQuantity" => "float",
        "setupTime" => "float",
        "runRate" => "float",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "autoCalculateLag" => "boolean",
        "machineResources" => "integer",
        "laborResources" => "integer",
        "costDetailList" => "ManufacturingCostDetailList",
        "predecessorList" => "ManufacturingOperationTaskPredecessorList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
