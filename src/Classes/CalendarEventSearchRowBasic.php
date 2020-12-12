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

class CalendarEventSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $accessLevel;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $attendee;
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
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $endTime;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $instanceEnd;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $instanceStart;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $location;
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
    public $organizer;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $owner;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $recurrence;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $resource;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $response;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
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
