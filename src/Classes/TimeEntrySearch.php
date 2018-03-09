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

class TimeEntrySearch extends SearchRecord {
    public $basic;
    public $callJoin;
    public $caseJoin;
    public $classJoin;
    public $customerJoin;
    public $departmentJoin;
    public $employeeJoin;
    public $eventJoin;
    public $itemJoin;
    public $jobJoin;
    public $locationJoin;
    public $projectTaskJoin;
    public $projectTaskAssignmentJoin;
    public $resourceAllocationJoin;
    public $taskJoin;
    public $timeSheetJoin;
    public $userJoin;
    public $vendorJoin;
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "TimeEntrySearchBasic",
        "callJoin" => "PhoneCallSearchBasic",
        "caseJoin" => "SupportCaseSearchBasic",
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
