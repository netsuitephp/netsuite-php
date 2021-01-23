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

class ProjectTaskAssignmentSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $actualWork;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $cost;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $costBase;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estimatedWork;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estimatedWorkBaseline;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $grossProfit;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $grossProfitBase;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $plannedWork;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $plannedWorkBaseline;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $price;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $priceBase;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $resource;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $resourceName;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $serviceItem;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $serviceItemDesc;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $unitCost;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $unitCostBase;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $unitPrice;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $unitPriceBase;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $units;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $workCalendar;
    static $paramtypesmap = array(
        "actualWork" => "SearchColumnDoubleField[]",
        "cost" => "SearchColumnDoubleField[]",
        "costBase" => "SearchColumnDoubleField[]",
        "endDate" => "SearchColumnDateField[]",
        "estimatedWork" => "SearchColumnDoubleField[]",
        "estimatedWorkBaseline" => "SearchColumnDoubleField[]",
        "grossProfit" => "SearchColumnDoubleField[]",
        "grossProfitBase" => "SearchColumnDoubleField[]",
        "internalId" => "SearchColumnSelectField[]",
        "plannedWork" => "SearchColumnDoubleField[]",
        "plannedWorkBaseline" => "SearchColumnDoubleField[]",
        "price" => "SearchColumnDoubleField[]",
        "priceBase" => "SearchColumnDoubleField[]",
        "resource" => "SearchColumnSelectField[]",
        "resourceName" => "SearchColumnStringField[]",
        "serviceItem" => "SearchColumnStringField[]",
        "serviceItemDesc" => "SearchColumnStringField[]",
        "startDate" => "SearchColumnDateField[]",
        "unitCost" => "SearchColumnDoubleField[]",
        "unitCostBase" => "SearchColumnDoubleField[]",
        "unitPrice" => "SearchColumnDoubleField[]",
        "unitPriceBase" => "SearchColumnDoubleField[]",
        "units" => "SearchColumnDoubleField[]",
        "workCalendar" => "SearchColumnSelectField[]",
    );
}
