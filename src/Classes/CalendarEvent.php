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

class CalendarEvent extends Record {
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
     * @var integer
     */
    public $period;
    /**
     * @var \NetSuite\Classes\RecurrenceFrequency
     */
    public $frequency;
    /**
     * @var \NetSuite\Classes\RecurrenceDowMaskList
     */
    public $recurrenceDowMaskList;
    /**
     * @var \NetSuite\Classes\RecurrenceDow
     */
    public $recurrenceDow;
    /**
     * @var \NetSuite\Classes\RecurrenceDowim
     */
    public $recurrenceDowim;
    /**
     * @var string
     */
    public $seriesStartDate;
    /**
     * @var string
     */
    public $endByDate;
    /**
     * @var boolean
     */
    public $noEndDate;
    /**
     * @var boolean
     */
    public $sendEmail;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $recurrence;
    /**
     * @var string
     */
    public $location;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var boolean
     */
    public $allDayEvent;
    /**
     * @var boolean
     */
    public $timedEvent;
    /**
     * @var \NetSuite\Classes\CalendarEventReminderType
     */
    public $reminderType;
    /**
     * @var \NetSuite\Classes\CalendarEventReminderMinutes
     */
    public $reminderMinutes;
    /**
     * @var \NetSuite\Classes\CalendarEventStatus
     */
    public $status;
    /**
     * @var \NetSuite\Classes\CalendarEventAccessLevel
     */
    public $accessLevel;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $organizer;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\ExclusionDateList
     */
    public $exclusionDateList;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $owner;
    /**
     * @var \NetSuite\Classes\CalendarEventAttendeeList
     */
    public $attendeeList;
    /**
     * @var \NetSuite\Classes\CalendarEventResourceList
     */
    public $resourceList;
    /**
     * @var \NetSuite\Classes\CalendarEventTimeItemList
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
        "period" => "integer",
        "frequency" => "RecurrenceFrequency",
        "recurrenceDowMaskList" => "RecurrenceDowMaskList",
        "recurrenceDow" => "RecurrenceDow",
        "recurrenceDowim" => "RecurrenceDowim",
        "seriesStartDate" => "dateTime",
        "endByDate" => "dateTime",
        "noEndDate" => "boolean",
        "sendEmail" => "boolean",
        "customForm" => "RecordRef",
        "title" => "string",
        "recurrence" => "string",
        "location" => "string",
        "startDate" => "dateTime",
        "allDayEvent" => "boolean",
        "timedEvent" => "boolean",
        "reminderType" => "CalendarEventReminderType",
        "reminderMinutes" => "CalendarEventReminderMinutes",
        "status" => "CalendarEventStatus",
        "accessLevel" => "CalendarEventAccessLevel",
        "organizer" => "RecordRef",
        "message" => "string",
        "createdDate" => "dateTime",
        "endDate" => "dateTime",
        "exclusionDateList" => "ExclusionDateList",
        "lastModifiedDate" => "dateTime",
        "owner" => "RecordRef",
        "attendeeList" => "CalendarEventAttendeeList",
        "resourceList" => "CalendarEventResourceList",
        "timeItemList" => "CalendarEventTimeItemList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
