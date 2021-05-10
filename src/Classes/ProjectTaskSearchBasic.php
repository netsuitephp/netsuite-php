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

class ProjectTaskSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $actualWork;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $assignee;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $company;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $constraintType;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $contact;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $cost;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $costBase;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $costBaseBaseline;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $costBaseline;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $costBaseVariance;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $costVariance;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $costVariancePercent;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $endDateBaseline;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $endDateVariance;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estimatedWork;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estimatedWorkBaseline;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estimatedWorkVariance;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estimatedWorkVariancePercent;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $finishByDate;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $id;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isMilestone;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isSummaryTask;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $nonBillableTask;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $owner;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $parent;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $percentWorkComplete;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $plannedWork;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $plannedWorkBaseline;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $predecessor;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $predecessors;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $priority;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $remainingWork;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $startDateBaseline;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $startDateVariance;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $successor;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
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
        "plannedWork" => "SearchDoubleField",
        "plannedWorkBaseline" => "SearchDoubleField",
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
