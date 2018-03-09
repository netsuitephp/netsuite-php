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

class JobSearch extends SearchRecord {
    public $basic;
    public $billingAccountJoin;
    public $billingScheduleJoin;
    public $contactPrimaryJoin;
    public $customerJoin;
    public $projectTaskJoin;
    public $resourceAllocationJoin;
    public $taskJoin;
    public $timeJoin;
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "JobSearchBasic",
        "billingAccountJoin" => "BillingAccountSearchBasic",
        "billingScheduleJoin" => "BillingScheduleSearchBasic",
        "contactPrimaryJoin" => "ContactSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "projectTaskJoin" => "ProjectTaskSearchBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchBasic",
        "taskJoin" => "TaskSearchBasic",
        "timeJoin" => "TimeBillSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
