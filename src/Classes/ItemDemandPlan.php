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

class ItemDemandPlan extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $units;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var integer
     */
    public $year;
    /**
     * @var \NetSuite\Classes\DemandPlanMonth
     */
    public $month;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\DemandPlanCalendarType
     */
    public $demandPlanCalendarType;
    /**
     * @var \NetSuite\Classes\DemandPlanMatrix
     */
    public $demandPlanMatrix;
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
        "subsidiary" => "RecordRef",
        "location" => "RecordRef",
        "item" => "RecordRef",
        "units" => "RecordRef",
        "memo" => "string",
        "year" => "integer",
        "month" => "DemandPlanMonth",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "demandPlanCalendarType" => "DemandPlanCalendarType",
        "demandPlanMatrix" => "DemandPlanMatrix",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
