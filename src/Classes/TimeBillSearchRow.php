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

class TimeBillSearchRow extends SearchRow {
    public $basic;
    public $callJoin;
    public $caseJoin;
    public $chargeJoin;
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
    public $userJoin;
    public $vendorJoin;
    public $timeSheetJoin;
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
        "userJoin" => "EmployeeSearchRowBasic",
        "vendorJoin" => "VendorSearchRowBasic",
        "timeSheetJoin" => "TimeSheetSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
