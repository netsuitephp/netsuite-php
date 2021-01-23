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

class ProjectTaskSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $actualWork;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $company;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $constraintType;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $contact;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $cost;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $costBase;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $costBaseBaseline;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $costBaseline;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $costBaseVariance;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $costVariance;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $costVariancePercent;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $endDateBaseline;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $endDateVariance;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estimatedWork;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estimatedWorkBaseline;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estimatedWorkVariance;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estimatedWorkVariancePercent;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $finishByDate;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $id;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isMilestone;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isSummaryTask;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $message;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $nonBillableTask;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $owner;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $parent;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $percentWorkComplete;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $plannedWork;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $plannedWorkBaseline;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $predecessor;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $predecessorLagDays;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $predecessors;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $predecessorType;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $priority;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $remainingWork;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startDateBaseline;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $startDateVariance;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $successor;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $successorType;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "actualWork" => "SearchColumnDoubleField[]",
        "company" => "SearchColumnSelectField[]",
        "constraintType" => "SearchColumnEnumSelectField[]",
        "contact" => "SearchColumnSelectField[]",
        "cost" => "SearchColumnDoubleField[]",
        "costBase" => "SearchColumnDoubleField[]",
        "costBaseBaseline" => "SearchColumnDoubleField[]",
        "costBaseline" => "SearchColumnDoubleField[]",
        "costBaseVariance" => "SearchColumnDoubleField[]",
        "costVariance" => "SearchColumnDoubleField[]",
        "costVariancePercent" => "SearchColumnDoubleField[]",
        "createdDate" => "SearchColumnDateField[]",
        "endDate" => "SearchColumnDateField[]",
        "endDateBaseline" => "SearchColumnDateField[]",
        "endDateVariance" => "SearchColumnDoubleField[]",
        "estimatedWork" => "SearchColumnDoubleField[]",
        "estimatedWorkBaseline" => "SearchColumnDoubleField[]",
        "estimatedWorkVariance" => "SearchColumnDoubleField[]",
        "estimatedWorkVariancePercent" => "SearchColumnDoubleField[]",
        "externalId" => "SearchColumnSelectField[]",
        "finishByDate" => "SearchColumnDateField[]",
        "id" => "SearchColumnLongField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isMilestone" => "SearchColumnBooleanField[]",
        "isSummaryTask" => "SearchColumnBooleanField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "message" => "SearchColumnStringField[]",
        "nonBillableTask" => "SearchColumnBooleanField[]",
        "owner" => "SearchColumnSelectField[]",
        "parent" => "SearchColumnSelectField[]",
        "percentWorkComplete" => "SearchColumnDoubleField[]",
        "plannedWork" => "SearchColumnDoubleField[]",
        "plannedWorkBaseline" => "SearchColumnDoubleField[]",
        "predecessor" => "SearchColumnSelectField[]",
        "predecessorLagDays" => "SearchColumnDoubleField[]",
        "predecessors" => "SearchColumnStringField[]",
        "predecessorType" => "SearchColumnStringField[]",
        "priority" => "SearchColumnEnumSelectField[]",
        "remainingWork" => "SearchColumnDoubleField[]",
        "startDate" => "SearchColumnDateField[]",
        "startDateBaseline" => "SearchColumnDateField[]",
        "startDateVariance" => "SearchColumnDoubleField[]",
        "status" => "SearchColumnEnumSelectField[]",
        "successor" => "SearchColumnSelectField[]",
        "successorType" => "SearchColumnStringField[]",
        "title" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
