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

class TaskSearchRowBasic extends SearchRowBasic {
    public $accessLevel;
    public $actualTime;
    public $assigned;
    public $company;
    public $completedDate;
    public $contact;
    public $createdDate;
    public $dueDate;
    public $estimatedTime;
    public $estimatedTimeOverride;
    public $externalId;
    public $internalId;
    public $isJobSummaryTask;
    public $isJobTask;
    public $lastModifiedDate;
    public $markdone;
    public $message;
    public $milestone;
    public $order;
    public $owner;
    public $percentComplete;
    public $percentTimeComplete;
    public $priority;
    public $startDate;
    public $startTime;
    public $status;
    public $timeRemaining;
    public $title;
    public $transaction;
    public $customFieldList;
    static $paramtypesmap = array(
        "accessLevel" => "SearchColumnStringField[]",
        "actualTime" => "SearchColumnDoubleField[]",
        "assigned" => "SearchColumnSelectField[]",
        "company" => "SearchColumnSelectField[]",
        "completedDate" => "SearchColumnDateField[]",
        "contact" => "SearchColumnSelectField[]",
        "createdDate" => "SearchColumnDateField[]",
        "dueDate" => "SearchColumnDateField[]",
        "estimatedTime" => "SearchColumnDoubleField[]",
        "estimatedTimeOverride" => "SearchColumnDoubleField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isJobSummaryTask" => "SearchColumnBooleanField[]",
        "isJobTask" => "SearchColumnBooleanField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "markdone" => "SearchColumnStringField[]",
        "message" => "SearchColumnStringField[]",
        "milestone" => "SearchColumnSelectField[]",
        "order" => "SearchColumnLongField[]",
        "owner" => "SearchColumnSelectField[]",
        "percentComplete" => "SearchColumnDoubleField[]",
        "percentTimeComplete" => "SearchColumnDoubleField[]",
        "priority" => "SearchColumnEnumSelectField[]",
        "startDate" => "SearchColumnDateField[]",
        "startTime" => "SearchColumnStringField[]",
        "status" => "SearchColumnEnumSelectField[]",
        "timeRemaining" => "SearchColumnDoubleField[]",
        "title" => "SearchColumnStringField[]",
        "transaction" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
