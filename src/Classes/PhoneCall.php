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

class PhoneCall extends Record {
    public $message;
    public $company;
    public $contact;
    public $supportCase;
    public $transaction;
    public $milestone;
    public $customForm;
    public $title;
    public $owner;
    public $assigned;
    public $sendEmail;
    public $startDate;
    public $endDate;
    public $timedEvent;
    public $completedDate;
    public $phone;
    public $status;
    public $priority;
    public $accessLevel;
    public $reminderType;
    public $reminderMinutes;
    public $createdDate;
    public $lastModifiedDate;
    public $contactList;
    public $timeItemList;
    public $customFieldList;
    public $internalId;
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
