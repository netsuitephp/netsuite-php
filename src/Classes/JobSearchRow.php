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

class JobSearchRow extends SearchRow {
    /**
     * @var \NetSuite\Classes\JobSearchRowBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\BillingAccountSearchRowBasic
     */
    public $billingAccountJoin;
    /**
     * @var \NetSuite\Classes\BillingScheduleSearchRowBasic
     */
    public $billingScheduleJoin;
    /**
     * @var \NetSuite\Classes\ContactSearchRowBasic
     */
    public $contactPrimaryJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchRowBasic
     */
    public $customerJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchRowBasic
     */
    public $projectManagerJoin;
    /**
     * @var \NetSuite\Classes\ProjectTaskSearchRowBasic
     */
    public $projectTaskJoin;
    /**
     * @var \NetSuite\Classes\ResourceAllocationSearchRowBasic
     */
    public $resourceAllocationJoin;
    /**
     * @var \NetSuite\Classes\TaskSearchRowBasic
     */
    public $taskJoin;
    /**
     * @var \NetSuite\Classes\TimeBillSearchRowBasic
     */
    public $timeJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchRowBasic[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "JobSearchRowBasic",
        "billingAccountJoin" => "BillingAccountSearchRowBasic",
        "billingScheduleJoin" => "BillingScheduleSearchRowBasic",
        "contactPrimaryJoin" => "ContactSearchRowBasic",
        "customerJoin" => "CustomerSearchRowBasic",
        "projectManagerJoin" => "EmployeeSearchRowBasic",
        "projectTaskJoin" => "ProjectTaskSearchRowBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
        "taskJoin" => "TaskSearchRowBasic",
        "timeJoin" => "TimeBillSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
