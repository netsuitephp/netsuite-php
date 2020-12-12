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

class ManufacturingOperationTask extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $manufacturingWorkCenter;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $manufacturingCostTemplate;
    /**
     * @var string
     */
    public $title;
    /**
     * @var integer
     */
    public $operationSequence;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $workOrder;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $order;
    /**
     * @var \NetSuite\Classes\ManufacturingOperationTaskStatus
     */
    public $status;
    /**
     * @var string
     */
    public $message;
    /**
     * @var float
     */
    public $estimatedWork;
    /**
     * @var float
     */
    public $actualWork;
    /**
     * @var float
     */
    public $remainingWork;
    /**
     * @var float
     */
    public $inputQuantity;
    /**
     * @var float
     */
    public $completedQuantity;
    /**
     * @var float
     */
    public $setupTime;
    /**
     * @var float
     */
    public $runRate;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var boolean
     */
    public $autoCalculateLag;
    /**
     * @var float
     */
    public $machineResources;
    /**
     * @var float
     */
    public $laborResources;
    /**
     * @var \NetSuite\Classes\ManufacturingCostDetailList
     */
    public $costDetailList;
    /**
     * @var \NetSuite\Classes\ManufacturingOperationTaskPredecessorList
     */
    public $predecessorList;
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
        "machineResources" => "float",
        "laborResources" => "float",
        "costDetailList" => "ManufacturingCostDetailList",
        "predecessorList" => "ManufacturingOperationTaskPredecessorList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
