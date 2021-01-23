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

class TimeBillSearchRow extends SearchRow {
    /**
     * @var \NetSuite\Classes\TimeBillSearchRowBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\PhoneCallSearchRowBasic
     */
    public $callJoin;
    /**
     * @var \NetSuite\Classes\SupportCaseSearchRowBasic
     */
    public $caseJoin;
    /**
     * @var \NetSuite\Classes\ChargeSearchRowBasic
     */
    public $chargeJoin;
    /**
     * @var \NetSuite\Classes\ClassificationSearchRowBasic
     */
    public $classJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchRowBasic
     */
    public $customerJoin;
    /**
     * @var \NetSuite\Classes\DepartmentSearchRowBasic
     */
    public $departmentJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchRowBasic
     */
    public $employeeJoin;
    /**
     * @var \NetSuite\Classes\CalendarEventSearchRowBasic
     */
    public $eventJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchRowBasic
     */
    public $itemJoin;
    /**
     * @var \NetSuite\Classes\JobSearchRowBasic
     */
    public $jobJoin;
    /**
     * @var \NetSuite\Classes\LocationSearchRowBasic
     */
    public $locationJoin;
    /**
     * @var \NetSuite\Classes\ProjectTaskSearchRowBasic
     */
    public $projectTaskJoin;
    /**
     * @var \NetSuite\Classes\ProjectTaskAssignmentSearchRowBasic
     */
    public $projectTaskAssignmentJoin;
    /**
     * @var \NetSuite\Classes\ResourceAllocationSearchRowBasic
     */
    public $resourceAllocationJoin;
    /**
     * @var \NetSuite\Classes\TaskSearchRowBasic
     */
    public $taskJoin;
    /**
     * @var \NetSuite\Classes\TimeSheetSearchRowBasic
     */
    public $timeSheetJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var \NetSuite\Classes\VendorSearchRowBasic
     */
    public $vendorJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchRowBasic[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "TimeBillSearchRowBasic",
        "callJoin" => "PhoneCallSearchRowBasic",
        "caseJoin" => "SupportCaseSearchRowBasic",
        "chargeJoin" => "ChargeSearchRowBasic",
        "classJoin" => "ClassificationSearchRowBasic",
        "customerJoin" => "CustomerSearchRowBasic",
        "departmentJoin" => "DepartmentSearchRowBasic",
        "employeeJoin" => "EmployeeSearchRowBasic",
        "eventJoin" => "CalendarEventSearchRowBasic",
        "itemJoin" => "ItemSearchRowBasic",
        "jobJoin" => "JobSearchRowBasic",
        "locationJoin" => "LocationSearchRowBasic",
        "projectTaskJoin" => "ProjectTaskSearchRowBasic",
        "projectTaskAssignmentJoin" => "ProjectTaskAssignmentSearchRowBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
        "taskJoin" => "TaskSearchRowBasic",
        "timeSheetJoin" => "TimeSheetSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "vendorJoin" => "VendorSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
