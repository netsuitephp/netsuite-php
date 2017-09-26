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

class SolutionSearchRowBasic extends SearchRowBasic {
    public $assigned;
    public $caseCount;
    public $createdDate;
    public $description;
    public $displayOnline;
    public $externalId;
    public $internalId;
    public $isInactive;
    public $lastModifiedDate;
    public $message;
    public $previewref;
    public $solutionCode;
    public $status;
    public $title;
    public $customFieldList;
    static $paramtypesmap = array(
        "assigned" => "SearchColumnSelectField[]",
        "caseCount" => "SearchColumnLongField[]",
        "createdDate" => "SearchColumnDateField[]",
        "description" => "SearchColumnStringField[]",
        "displayOnline" => "SearchColumnBooleanField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "message" => "SearchColumnStringField[]",
        "previewref" => "SearchColumnStringField[]",
        "solutionCode" => "SearchColumnStringField[]",
        "status" => "SearchColumnEnumSelectField[]",
        "title" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
