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

class TaskSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $accessLevel;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $actualTime;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $assigned;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $company;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $completedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $contact;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $dueDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estimatedTime;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estimatedTimeOverride;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isJobSummaryTask;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isJobTask;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $markdone;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $message;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $milestone;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $order;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $owner;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $percentComplete;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $percentTimeComplete;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $priority;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $startTime;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $timeRemaining;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $transaction;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
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
