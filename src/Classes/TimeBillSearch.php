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

class TimeBillSearch extends SearchRecord {
    /**
     * @var \NetSuite\Classes\TimeBillSearchBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\PhoneCallSearchBasic
     */
    public $callJoin;
    /**
     * @var \NetSuite\Classes\SupportCaseSearchBasic
     */
    public $caseJoin;
    /**
     * @var \NetSuite\Classes\ChargeSearchBasic
     */
    public $chargeJoin;
    /**
     * @var \NetSuite\Classes\ClassificationSearchBasic
     */
    public $classJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchBasic
     */
    public $customerJoin;
    /**
     * @var \NetSuite\Classes\DepartmentSearchBasic
     */
    public $departmentJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchBasic
     */
    public $employeeJoin;
    /**
     * @var \NetSuite\Classes\CalendarEventSearchBasic
     */
    public $eventJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchBasic
     */
    public $itemJoin;
    /**
     * @var \NetSuite\Classes\JobSearchBasic
     */
    public $jobJoin;
    /**
     * @var \NetSuite\Classes\LocationSearchBasic
     */
    public $locationJoin;
    /**
     * @var \NetSuite\Classes\ProjectTaskSearchBasic
     */
    public $projectTaskJoin;
    /**
     * @var \NetSuite\Classes\ProjectTaskAssignmentSearchBasic
     */
    public $projectTaskAssignmentJoin;
    /**
     * @var \NetSuite\Classes\ResourceAllocationSearchBasic
     */
    public $resourceAllocationJoin;
    /**
     * @var \NetSuite\Classes\TaskSearchBasic
     */
    public $taskJoin;
    /**
     * @var \NetSuite\Classes\TimeSheetSearchBasic
     */
    public $timeSheetJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var \NetSuite\Classes\VendorSearchBasic
     */
    public $vendorJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchJoin[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "TimeBillSearchBasic",
        "callJoin" => "PhoneCallSearchBasic",
        "caseJoin" => "SupportCaseSearchBasic",
        "chargeJoin" => "ChargeSearchBasic",
        "classJoin" => "ClassificationSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "departmentJoin" => "DepartmentSearchBasic",
        "employeeJoin" => "EmployeeSearchBasic",
        "eventJoin" => "CalendarEventSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "jobJoin" => "JobSearchBasic",
        "locationJoin" => "LocationSearchBasic",
        "projectTaskJoin" => "ProjectTaskSearchBasic",
        "projectTaskAssignmentJoin" => "ProjectTaskAssignmentSearchBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchBasic",
        "taskJoin" => "TaskSearchBasic",
        "timeSheetJoin" => "TimeSheetSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "vendorJoin" => "VendorSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
