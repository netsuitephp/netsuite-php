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

class ProjectTask extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $eventId;
    /**
     * @var float
     */
    public $percentTimeComplete;
    /**
     * @var string
     */
    public $title;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $company;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $contact;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $order;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $owner;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $parent;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $priority;
    /**
     * @var float
     */
    public $estimatedWork;
    /**
     * @var float
     */
    public $estimatedWorkBaseline;
    /**
     * @var \NetSuite\Classes\ProjectTaskConstraintType
     */
    public $constraintType;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $startDateBaseline;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var string
     */
    public $finishByDate;
    /**
     * @var string
     */
    public $endDateBaseline;
    /**
     * @var \NetSuite\Classes\Duration
     */
    public $actualWork;
    /**
     * @var \NetSuite\Classes\Duration
     */
    public $remainingWork;
    /**
     * @var string
     */
    public $message;
    /**
     * @var boolean
     */
    public $isMilestone;
    /**
     * @var string
     */
    public $isOnCriticalPath;
    /**
     * @var float
     */
    public $slackMinutes;
    /**
     * @var string
     */
    public $lateEnd;
    /**
     * @var string
     */
    public $lateStart;
    /**
     * @var \NetSuite\Classes\ProjectTaskStatus
     */
    public $status;
    /**
     * @var boolean
     */
    public $nonBillableTask;
    /**
     * @var \NetSuite\Classes\ProjectTaskAssigneeList
     */
    public $assigneeList;
    /**
     * @var \NetSuite\Classes\ProjectTaskPredecessorList
     */
    public $predecessorList;
    /**
     * @var \NetSuite\Classes\ProjectTaskTimeItemList
     */
    public $timeItemList;
    /**
     * @var float
     */
    public $plannedWork;
    /**
     * @var float
     */
    public $plannedWorkBaseline;
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
        "eventId" => "RecordRef",
        "percentTimeComplete" => "float",
        "title" => "string",
        "company" => "RecordRef",
        "contact" => "RecordRef",
        "order" => "RecordRef",
        "owner" => "RecordRef",
        "parent" => "RecordRef",
        "priority" => "RecordRef",
        "estimatedWork" => "float",
        "estimatedWorkBaseline" => "float",
        "constraintType" => "ProjectTaskConstraintType",
        "startDate" => "dateTime",
        "startDateBaseline" => "dateTime",
        "endDate" => "dateTime",
        "finishByDate" => "dateTime",
        "endDateBaseline" => "dateTime",
        "actualWork" => "Duration",
        "remainingWork" => "Duration",
        "message" => "string",
        "isMilestone" => "boolean",
        "isOnCriticalPath" => "string",
        "slackMinutes" => "float",
        "lateEnd" => "dateTime",
        "lateStart" => "dateTime",
        "status" => "ProjectTaskStatus",
        "nonBillableTask" => "boolean",
        "assigneeList" => "ProjectTaskAssigneeList",
        "predecessorList" => "ProjectTaskPredecessorList",
        "timeItemList" => "ProjectTaskTimeItemList",
        "plannedWork" => "float",
        "plannedWorkBaseline" => "float",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
