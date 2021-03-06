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

class ProjectTaskSearch extends SearchRecord {
    /**
     * @var \NetSuite\Classes\ProjectTaskSearchBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\JobSearchBasic
     */
    public $jobJoin;
    /**
     * @var \NetSuite\Classes\ProjectTaskSearchBasic
     */
    public $predecessorJoin;
    /**
     * @var \NetSuite\Classes\ProjectTaskAssignmentSearchBasic
     */
    public $projectTaskAssignmentJoin;
    /**
     * @var \NetSuite\Classes\ResourceAllocationSearchBasic
     */
    public $resourceAllocationJoin;
    /**
     * @var \NetSuite\Classes\ProjectTaskSearchBasic
     */
    public $successorJoin;
    /**
     * @var \NetSuite\Classes\TimeBillSearchBasic
     */
    public $timeJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $transactionJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var \NetSuite\Classes\NoteSearchBasic
     */
    public $userNotesJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchJoin[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "ProjectTaskSearchBasic",
        "jobJoin" => "JobSearchBasic",
        "predecessorJoin" => "ProjectTaskSearchBasic",
        "projectTaskAssignmentJoin" => "ProjectTaskAssignmentSearchBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchBasic",
        "successorJoin" => "ProjectTaskSearchBasic",
        "timeJoin" => "TimeBillSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
