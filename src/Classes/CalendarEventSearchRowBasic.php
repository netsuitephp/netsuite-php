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

class CalendarEventSearchRowBasic extends SearchRowBasic {
    public $accessLevel;
    public $attendee;
    public $company;
    public $completedDate;
    public $contact;
    public $createdDate;
    public $endTime;
    public $externalId;
    public $instanceEnd;
    public $instanceStart;
    public $internalId;
    public $lastModifiedDate;
    public $location;
    public $markdone;
    public $message;
    public $organizer;
    public $owner;
    public $recurrence;
    public $resource;
    public $response;
    public $startDate;
    public $startTime;
    public $status;
    public $title;
    public $transaction;
    public $customFieldList;
    static $paramtypesmap = array(
        "accessLevel" => "SearchColumnEnumSelectField[]",
        "attendee" => "SearchColumnSelectField[]",
        "company" => "SearchColumnSelectField[]",
        "completedDate" => "SearchColumnDateField[]",
        "contact" => "SearchColumnSelectField[]",
        "createdDate" => "SearchColumnDateField[]",
        "endTime" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "instanceEnd" => "SearchColumnDateField[]",
        "instanceStart" => "SearchColumnDateField[]",
        "internalId" => "SearchColumnSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "location" => "SearchColumnStringField[]",
        "markdone" => "SearchColumnStringField[]",
        "message" => "SearchColumnStringField[]",
        "organizer" => "SearchColumnSelectField[]",
        "owner" => "SearchColumnSelectField[]",
        "recurrence" => "SearchColumnStringField[]",
        "resource" => "SearchColumnSelectField[]",
        "response" => "SearchColumnEnumSelectField[]",
        "startDate" => "SearchColumnStringField[]",
        "startTime" => "SearchColumnStringField[]",
        "status" => "SearchColumnEnumSelectField[]",
        "title" => "SearchColumnStringField[]",
        "transaction" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
