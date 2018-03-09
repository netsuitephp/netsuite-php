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

class TaskSearchBasic extends SearchRecordBasic {
    public $actualTime;
    public $assigned;
    public $company;
    public $completedDate;
    public $contact;
    public $createdDate;
    public $endDate;
    public $estimatedTime;
    public $estimatedTimeOverride;
    public $externalId;
    public $externalIdString;
    public $internalId;
    public $internalIdNumber;
    public $isJobSummaryTask;
    public $isJobTask;
    public $isPrivate;
    public $lastModifiedDate;
    public $milestone;
    public $owner;
    public $percentComplete;
    public $percentTimeComplete;
    public $priority;
    public $startDate;
    public $status;
    public $timeRemaining;
    public $title;
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
