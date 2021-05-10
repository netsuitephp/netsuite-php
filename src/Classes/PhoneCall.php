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

class PhoneCall extends Record {
    /**
     * @var string
     */
    public $message;
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
    public $owner;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $assigned;
    /**
     * @var boolean
     */
    public $sendEmail;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var boolean
     */
    public $timedEvent;
    /**
     * @var string
     */
    public $completedDate;
    /**
     * @var string
     */
    public $phone;
    /**
     * @var \NetSuite\Classes\PhoneCallStatus
     */
    public $status;
    /**
     * @var \NetSuite\Classes\PhoneCallPriority
     */
    public $priority;
    /**
     * @var boolean
     */
    public $accessLevel;
    /**
     * @var \NetSuite\Classes\PhoneCallReminderType
     */
    public $reminderType;
    /**
     * @var \NetSuite\Classes\PhoneCallReminderMinutes
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
     * @var \NetSuite\Classes\PhoneCallContactList
     */
    public $contactList;
    /**
     * @var \NetSuite\Classes\PhoneCallTimeItemList
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
        "message" => "string",
        "company" => "RecordRef",
        "contact" => "RecordRef",
        "supportCase" => "RecordRef",
        "transaction" => "RecordRef",
        "milestone" => "RecordRef",
        "customForm" => "RecordRef",
        "title" => "string",
        "owner" => "RecordRef",
        "assigned" => "RecordRef",
        "sendEmail" => "boolean",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "timedEvent" => "boolean",
        "completedDate" => "dateTime",
        "phone" => "string",
        "status" => "PhoneCallStatus",
        "priority" => "PhoneCallPriority",
        "accessLevel" => "boolean",
        "reminderType" => "PhoneCallReminderType",
        "reminderMinutes" => "PhoneCallReminderMinutes",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "contactList" => "PhoneCallContactList",
        "timeItemList" => "PhoneCallTimeItemList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
