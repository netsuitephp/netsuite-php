<?php
/**
 * This file is part of the netsuitephp/netsuite-php library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/netsuitephp/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/netsuitephp/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 */

namespace NetSuite\Classes;

class ManufacturingOperationTaskSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $actualRunTime;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $actualSetupTime;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $completedQuantity;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estimatedWork;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $id;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $inputQuantity;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $laborResources;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $lagAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $lagType;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $lagUnits;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $machineResources;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $manufacturingCostTemplate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $manufacturingWorkCenter;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $message;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $order;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $predecessor;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $predecessorType;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $remainingQuantity;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $runRate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $runTime;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $sequence;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $setupTime;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $workOrder;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
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
        "laborResources" => "SearchColumnDoubleField[]",
        "lagAmount" => "SearchColumnDoubleField[]",
        "lagType" => "SearchColumnEnumSelectField[]",
        "lagUnits" => "SearchColumnStringField[]",
        "machineResources" => "SearchColumnDoubleField[]",
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
