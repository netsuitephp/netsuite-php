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

class CalendarEventSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $accessLevel;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $attendee;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $calendar;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $completedDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $instanceStart;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isUpcomingEvent;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $message;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $organizer;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $owner;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $resource;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $response;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
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
