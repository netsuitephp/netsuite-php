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

class TaskSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $actualTime;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $assigned;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $company;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $completedDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $contact;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estimatedTime;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estimatedTimeOverride;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
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
    public $isJobSummaryTask;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isJobTask;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isPrivate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $milestone;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $owner;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $percentComplete;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $percentTimeComplete;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $priority;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $timeRemaining;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "actualTime" => "SearchDoubleField",
        "assigned" => "SearchMultiSelectField",
        "company" => "SearchMultiSelectField",
        "completedDate" => "SearchDateField",
        "contact" => "SearchMultiSelectField",
        "createdDate" => "SearchDateField",
        "endDate" => "SearchDateField",
        "estimatedTime" => "SearchDoubleField",
        "estimatedTimeOverride" => "SearchDoubleField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isJobSummaryTask" => "SearchBooleanField",
        "isJobTask" => "SearchBooleanField",
        "isPrivate" => "SearchBooleanField",
        "lastModifiedDate" => "SearchDateField",
        "milestone" => "SearchLongField",
        "owner" => "SearchMultiSelectField",
        "percentComplete" => "SearchLongField",
        "percentTimeComplete" => "SearchLongField",
        "priority" => "SearchEnumMultiSelectField",
        "startDate" => "SearchDateField",
        "status" => "SearchEnumMultiSelectField",
        "timeRemaining" => "SearchDoubleField",
        "title" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
