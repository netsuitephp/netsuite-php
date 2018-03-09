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

class ProjectTaskSearchBasic extends SearchRecordBasic {
    public $actualWork;
    public $assignee;
    public $company;
    public $constraintType;
    public $contact;
    public $cost;
    public $costBase;
    public $costBaseBaseline;
    public $costBaseline;
    public $costBaseVariance;
    public $costVariance;
    public $costVariancePercent;
    public $createdDate;
    public $endDate;
    public $endDateBaseline;
    public $endDateVariance;
    public $estimatedWork;
    public $estimatedWorkBaseline;
    public $estimatedWorkVariance;
    public $estimatedWorkVariancePercent;
    public $externalId;
    public $externalIdString;
    public $finishByDate;
    public $id;
    public $internalId;
    public $internalIdNumber;
    public $isMilestone;
    public $isSummaryTask;
    public $lastModifiedDate;
    public $nonBillableTask;
    public $owner;
    public $parent;
    public $percentWorkComplete;
    public $predecessor;
    public $predecessors;
    public $priority;
    public $remainingWork;
    public $startDate;
    public $startDateBaseline;
    public $startDateVariance;
    public $status;
    public $successor;
    public $title;
    public $customFieldList;
    static $paramtypesmap = array(
        "actualWork" => "SearchDoubleField",
        "assignee" => "SearchMultiSelectField",
        "company" => "SearchMultiSelectField",
        "constraintType" => "SearchEnumMultiSelectField",
        "contact" => "SearchMultiSelectField",
        "cost" => "SearchDoubleField",
        "costBase" => "SearchDoubleField",
        "costBaseBaseline" => "SearchDoubleField",
        "costBaseline" => "SearchDoubleField",
        "costBaseVariance" => "SearchDoubleField",
        "costVariance" => "SearchDoubleField",
        "costVariancePercent" => "SearchDoubleField",
        "createdDate" => "SearchDateField",
        "endDate" => "SearchDateField",
        "endDateBaseline" => "SearchDateField",
        "endDateVariance" => "SearchDoubleField",
        "estimatedWork" => "SearchDoubleField",
        "estimatedWorkBaseline" => "SearchDoubleField",
        "estimatedWorkVariance" => "SearchDoubleField",
        "estimatedWorkVariancePercent" => "SearchDoubleField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "finishByDate" => "SearchDateField",
        "id" => "SearchLongField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isMilestone" => "SearchBooleanField",
        "isSummaryTask" => "SearchBooleanField",
        "lastModifiedDate" => "SearchDateField",
        "nonBillableTask" => "SearchBooleanField",
        "owner" => "SearchMultiSelectField",
        "parent" => "SearchMultiSelectField",
        "percentWorkComplete" => "SearchDoubleField",
        "predecessor" => "SearchMultiSelectField",
        "predecessors" => "SearchStringField",
        "priority" => "SearchEnumMultiSelectField",
        "remainingWork" => "SearchDoubleField",
        "startDate" => "SearchDateField",
        "startDateBaseline" => "SearchDateField",
        "startDateVariance" => "SearchDoubleField",
        "status" => "SearchEnumMultiSelectField",
        "successor" => "SearchMultiSelectField",
        "title" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
