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

class ManufacturingOperationTaskSearchBasic extends SearchRecordBasic {
    public $actualRunTime;
    public $actualSetupTime;
    public $completedQuantity;
    public $endDate;
    public $estimatedWork;
    public $externalId;
    public $externalIdString;
    public $id;
    public $inputQuantity;
    public $internalId;
    public $internalIdNumber;
    public $laborResources;
    public $lagAmount;
    public $lagType;
    public $lagUnits;
    public $machineResources;
    public $manufacturingCostTemplate;
    public $manufacturingWorkCenter;
    public $name;
    public $order;
    public $predecessor;
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
        "actualRunTime" => "SearchDoubleField",
        "actualSetupTime" => "SearchDoubleField",
        "completedQuantity" => "SearchDoubleField",
        "endDate" => "SearchDateField",
        "estimatedWork" => "SearchDoubleField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "id" => "SearchLongField",
        "inputQuantity" => "SearchDoubleField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "laborResources" => "SearchLongField",
        "lagAmount" => "SearchDoubleField",
        "lagType" => "SearchEnumMultiSelectField",
        "lagUnits" => "SearchStringField",
        "machineResources" => "SearchLongField",
        "manufacturingCostTemplate" => "SearchMultiSelectField",
        "manufacturingWorkCenter" => "SearchMultiSelectField",
        "name" => "SearchStringField",
        "order" => "SearchDoubleField",
        "predecessor" => "SearchMultiSelectField",
        "remainingQuantity" => "SearchDoubleField",
        "runRate" => "SearchDoubleField",
        "runTime" => "SearchDoubleField",
        "sequence" => "SearchLongField",
        "setupTime" => "SearchDoubleField",
        "startDate" => "SearchDateField",
        "status" => "SearchMultiSelectField",
        "workOrder" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
