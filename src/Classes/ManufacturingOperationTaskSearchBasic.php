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

class ManufacturingOperationTaskSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $actualRunTime;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $actualSetupTime;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $completedQuantity;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estimatedWork;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $id;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $inputQuantity;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $laborResources;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $lagAmount;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $lagType;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $lagUnits;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $machineResources;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $manufacturingCostTemplate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $manufacturingWorkCenter;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $order;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $predecessor;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $remainingQuantity;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $runRate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $runTime;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $sequence;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $setupTime;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $workOrder;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
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
        "laborResources" => "SearchDoubleField",
        "lagAmount" => "SearchDoubleField",
        "lagType" => "SearchEnumMultiSelectField",
        "lagUnits" => "SearchStringField",
        "machineResources" => "SearchDoubleField",
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
