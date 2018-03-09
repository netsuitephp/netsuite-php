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

class ProjectTask extends Record {
    public $customForm;
    public $eventId;
    public $percentTimeComplete;
    public $title;
    public $company;
    public $contact;
    public $order;
    public $owner;
    public $parent;
    public $priority;
    public $estimatedWork;
    public $estimatedWorkBaseline;
    public $constraintType;
    public $startDate;
    public $startDateBaseline;
    public $endDate;
    public $finishByDate;
    public $endDateBaseline;
    public $actualWork;
    public $remainingWork;
    public $message;
    public $isMilestone;
    public $isOnCriticalPath;
    public $slackMinutes;
    public $lateEnd;
    public $lateStart;
    public $status;
    public $nonBillableTask;
    public $assigneeList;
    public $predecessorList;
    public $timeItemList;
    public $customFieldList;
    public $internalId;
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
        "actualWork" => "float",
        "remainingWork" => "float",
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
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
