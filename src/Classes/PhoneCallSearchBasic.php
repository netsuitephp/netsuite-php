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

class PhoneCallSearchBasic extends SearchRecordBasic {
    public $assigned;
    public $company;
    public $completedDate;
    public $contact;
    public $createdBy;
    public $createdDate;
    public $externalId;
    public $externalIdString;
    public $internalId;
    public $internalIdNumber;
    public $isPrivate;
    public $lastModifiedDate;
    public $owner;
    public $phone;
    public $priority;
    public $startDate;
    public $status;
    public $title;
    public $customFieldList;
    static $paramtypesmap = array(
        "assigned" => "SearchMultiSelectField",
        "company" => "SearchMultiSelectField",
        "completedDate" => "SearchDateField",
        "contact" => "SearchMultiSelectField",
        "createdBy" => "SearchMultiSelectField",
        "createdDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isPrivate" => "SearchBooleanField",
        "lastModifiedDate" => "SearchDateField",
        "owner" => "SearchBooleanField",
        "phone" => "SearchStringField",
        "priority" => "SearchEnumMultiSelectField",
        "startDate" => "SearchDateField",
        "status" => "SearchEnumMultiSelectField",
        "title" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
