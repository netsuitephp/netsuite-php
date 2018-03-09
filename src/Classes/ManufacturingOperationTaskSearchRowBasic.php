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

class ManufacturingOperationTaskSearchRowBasic extends SearchRowBasic {
    public $actualRunTime;
    public $actualSetupTime;
    public $completedQuantity;
    public $endDate;
    public $estimatedWork;
    public $externalId;
    public $id;
    public $inputQuantity;
    public $internalId;
    public $laborResources;
    public $lagAmount;
    public $lagType;
    public $lagUnits;
    public $machineResources;
    public $manufacturingCostTemplate;
    public $manufacturingWorkCenter;
    public $message;
    public $name;
    public $order;
    public $predecessor;
    public $predecessorType;
    public $remainingQuantity;
    public $runRate;
    public $runTime;
    public $sequence;
    public $setupTime;
    public $startDate;
    public $status;
    public $workOrder;
    public $customFieldList;
    static $paramtypesmap = array(
        "actualRunTime" => "SearchColumnDoubleField[]",
        "actualSetupTime" => "SearchColumnDoubleField[]",
        "completedQuantity" => "SearchColumnDoubleField[]",
        "endDate" => "SearchColumnDateField[]",
        "estimatedWork" => "SearchColumnDoubleField[]",
        "externalId" => "SearchColumnSelectField[]",
        "id" => "SearchColumnLongField[]",
        "inputQuantity" => "SearchColumnDoubleField[]",
        "internalId" => "SearchColumnSelectField[]",
        "laborResources" => "SearchColumnLongField[]",
        "lagAmount" => "SearchColumnDoubleField[]",
        "lagType" => "SearchColumnEnumSelectField[]",
        "lagUnits" => "SearchColumnStringField[]",
        "machineResources" => "SearchColumnLongField[]",
        "manufacturingCostTemplate" => "SearchColumnSelectField[]",
        "manufacturingWorkCenter" => "SearchColumnSelectField[]",
        "message" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "order" => "SearchColumnDoubleField[]",
        "predecessor" => "SearchColumnSelectField[]",
        "predecessorType" => "SearchColumnStringField[]",
        "remainingQuantity" => "SearchColumnDoubleField[]",
        "runRate" => "SearchColumnDoubleField[]",
        "runTime" => "SearchColumnDoubleField[]",
        "sequence" => "SearchColumnLongField[]",
        "setupTime" => "SearchColumnDoubleField[]",
        "startDate" => "SearchColumnDateField[]",
        "status" => "SearchColumnSelectField[]",
        "workOrder" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
