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

class Solution extends Record {
    public $customForm;
    public $solutionCode;
    public $title;
    public $message;
    public $status;
    public $displayOnline;
    public $assigned;
    public $isInactive;
    public $longDescription;
    public $topicsList;
    public $createdDate;
    public $lastModifiedDate;
    public $solutionsList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "customForm" => "RecordRef",
        "solutionCode" => "string",
        "title" => "string",
        "message" => "string",
        "status" => "SolutionStatus",
        "displayOnline" => "boolean",
        "assigned" => "RecordRef",
        "isInactive" => "boolean",
        "longDescription" => "string",
        "topicsList" => "SolutionTopicsList",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "solutionsList" => "SolutionsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
