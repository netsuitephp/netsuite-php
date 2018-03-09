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

class ProjectTaskAssignmentSearchBasic extends SearchRecordBasic {
    public $actualWork;
    public $cost;
    public $costBase;
    public $endDate;
    public $estimatedWork;
    public $estimatedWorkBaseline;
    public $grossProfit;
    public $grossProfitBase;
    public $internalId;
    public $internalIdNumber;
    public $price;
    public $priceBase;
    public $resource;
    public $resourceName;
    public $serviceItem;
    public $serviceItemDesc;
    public $startDate;
    public $unitCost;
    public $unitCostBase;
    public $unitPrice;
    public $unitPriceBase;
    public $units;
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
