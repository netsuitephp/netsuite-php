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

class SolutionSearchBasic extends SearchRecordBasic {
    public $abstract;
    public $assigned;
    public $caseCount;
    public $code;
    public $createdDate;
    public $description;
    public $externalId;
    public $externalIdString;
    public $find;
    public $internalId;
    public $internalIdNumber;
    public $isInactive;
    public $isOnline;
    public $lastModifiedDate;
    public $number;
    public $status;
    public $title;
    public $topic;
    public $customFieldList;
    static $paramtypesmap = array(
        "abstract" => "SearchStringField",
        "assigned" => "SearchMultiSelectField",
        "caseCount" => "SearchLongField",
        "code" => "SearchStringField",
        "createdDate" => "SearchDateField",
        "description" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "find" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "isOnline" => "SearchBooleanField",
        "lastModifiedDate" => "SearchDateField",
        "number" => "SearchLongField",
        "status" => "SearchEnumMultiSelectField",
        "title" => "SearchStringField",
        "topic" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
