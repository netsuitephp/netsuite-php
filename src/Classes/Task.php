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

class Task extends Record {
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
    public $supportCase;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $transaction;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $milestone;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $title;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $assigned;
    /**
     * @var boolean
     */
    public $sendEmail;
    /**
     * @var boolean
     */
    public $timedEvent;
    /**
     * @var \NetSuite\Classes\Duration
     */
    public $estimatedTime;
    /**
     * @var \NetSuite\Classes\Duration
     */
    public $estimatedTimeOverride;
    /**
     * @var \NetSuite\Classes\Duration
     */
    public $actualTime;
    /**
     * @var \NetSuite\Classes\Duration
     */
    public $timeRemaining;
    /**
     * @var float
     */
    public $percentTimeComplete;
    /**
     * @var float
     */
    public $percentComplete;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $parent;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var string
     */
    public $dueDate;
    /**
     * @var string
     */
    public $completedDate;
    /**
     * @var \NetSuite\Classes\TaskPriority
     */
    public $priority;
    /**
     * @var \NetSuite\Classes\TaskStatus
     */
    public $status;
    /**
     * @var string
     */
    public $message;
    /**
     * @var boolean
     */
    public $accessLevel;
    /**
     * @var \NetSuite\Classes\TaskReminderType
     */
    public $reminderType;
    /**
     * @var \NetSuite\Classes\TaskReminderMinutes
     */
    public $reminderMinutes;
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $owner;
    /**
     * @var \NetSuite\Classes\TaskContactList
     */
    public $contactList;
    /**
     * @var \NetSuite\Classes\TaskTimeItemList
     */
    public $timeItemList;
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
        "company" => "RecordRef",
        "contact" => "RecordRef",
        "supportCase" => "RecordRef",
        "transaction" => "RecordRef",
        "milestone" => "RecordRef",
        "customForm" => "RecordRef",
        "title" => "string",
        "assigned" => "RecordRef",
        "sendEmail" => "boolean",
        "timedEvent" => "boolean",
        "estimatedTime" => "Duration",
        "estimatedTimeOverride" => "Duration",
        "actualTime" => "Duration",
        "timeRemaining" => "Duration",
        "percentTimeComplete" => "float",
        "percentComplete" => "float",
        "parent" => "RecordRef",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "dueDate" => "dateTime",
        "completedDate" => "dateTime",
        "priority" => "TaskPriority",
        "status" => "TaskStatus",
        "message" => "string",
        "accessLevel" => "boolean",
        "reminderType" => "TaskReminderType",
        "reminderMinutes" => "TaskReminderMinutes",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "owner" => "RecordRef",
        "contactList" => "TaskContactList",
        "timeItemList" => "TaskTimeItemList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
