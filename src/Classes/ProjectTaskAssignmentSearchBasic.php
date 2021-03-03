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

class ProjectTaskAssignmentSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $actualWork;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $cost;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $costBase;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estimatedWork;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estimatedWorkBaseline;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $grossProfit;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $grossProfitBase;
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
    public $plannedWork;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $plannedWorkBaseline;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $price;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $priceBase;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $resource;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $resourceName;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $serviceItem;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $serviceItemDesc;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $unitCost;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $unitCostBase;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $unitPrice;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $unitPriceBase;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $units;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $workCalendar;
    static $paramtypesmap = array(
        "actualWork" => "SearchDoubleField",
        "cost" => "SearchDoubleField",
        "costBase" => "SearchDoubleField",
        "endDate" => "SearchDateField",
        "estimatedWork" => "SearchDoubleField",
        "estimatedWorkBaseline" => "SearchDoubleField",
        "grossProfit" => "SearchDoubleField",
        "grossProfitBase" => "SearchDoubleField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "plannedWork" => "SearchDoubleField",
        "plannedWorkBaseline" => "SearchDoubleField",
        "price" => "SearchDoubleField",
        "priceBase" => "SearchDoubleField",
        "resource" => "SearchMultiSelectField",
        "resourceName" => "SearchStringField",
        "serviceItem" => "SearchStringField",
        "serviceItemDesc" => "SearchStringField",
        "startDate" => "SearchDateField",
        "unitCost" => "SearchDoubleField",
        "unitCostBase" => "SearchDoubleField",
        "unitPrice" => "SearchDoubleField",
        "unitPriceBase" => "SearchDoubleField",
        "units" => "SearchDoubleField",
        "workCalendar" => "SearchMultiSelectField",
    );
}
