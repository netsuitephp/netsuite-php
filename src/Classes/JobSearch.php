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

class JobSearch extends SearchRecord {
    /**
     * @var \NetSuite\Classes\JobSearchBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\BillingAccountSearchBasic
     */
    public $billingAccountJoin;
    /**
     * @var \NetSuite\Classes\BillingScheduleSearchBasic
     */
    public $billingScheduleJoin;
    /**
     * @var \NetSuite\Classes\ContactSearchBasic
     */
    public $contactPrimaryJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchBasic
     */
    public $customerJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchBasic
     */
    public $projectManagerJoin;
    /**
     * @var \NetSuite\Classes\ProjectTaskSearchBasic
     */
    public $projectTaskJoin;
    /**
     * @var \NetSuite\Classes\ResourceAllocationSearchBasic
     */
    public $resourceAllocationJoin;
    /**
     * @var \NetSuite\Classes\TaskSearchBasic
     */
    public $taskJoin;
    /**
     * @var \NetSuite\Classes\TimeBillSearchBasic
     */
    public $timeJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchJoin[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "JobSearchBasic",
        "billingAccountJoin" => "BillingAccountSearchBasic",
        "billingScheduleJoin" => "BillingScheduleSearchBasic",
        "contactPrimaryJoin" => "ContactSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "projectManagerJoin" => "EmployeeSearchBasic",
        "projectTaskJoin" => "ProjectTaskSearchBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchBasic",
        "taskJoin" => "TaskSearchBasic",
        "timeJoin" => "TimeBillSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
