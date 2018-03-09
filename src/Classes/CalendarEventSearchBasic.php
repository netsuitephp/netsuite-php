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

class CalendarEventSearchBasic extends SearchRecordBasic {
    public $accessLevel;
    public $attendee;
    public $calendar;
    public $completedDate;
    public $createdDate;
    public $externalId;
    public $externalIdString;
    public $instanceStart;
    public $internalId;
    public $internalIdNumber;
    public $isUpcomingEvent;
    public $lastModifiedDate;
    public $location;
    public $message;
    public $organizer;
    public $owner;
    public $resource;
    public $response;
    public $startDate;
    public $status;
    public $title;
    public $customFieldList;
    static $paramtypesmap = array(
        "accessLevel" => "SearchEnumMultiSelectField",
        "attendee" => "SearchMultiSelectField",
        "calendar" => "SearchMultiSelectField",
        "completedDate" => "SearchDateField",
        "createdDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "instanceStart" => "SearchDateField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isUpcomingEvent" => "SearchBooleanField",
        "lastModifiedDate" => "SearchDateField",
        "location" => "SearchStringField",
        "message" => "SearchStringField",
        "organizer" => "SearchMultiSelectField",
        "owner" => "SearchMultiSelectField",
        "resource" => "SearchMultiSelectField",
        "response" => "SearchEnumMultiSelectField",
        "startDate" => "SearchDateField",
        "status" => "SearchEnumMultiSelectField",
        "title" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
