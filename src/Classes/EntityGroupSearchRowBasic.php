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

class EntityGroupSearchRowBasic extends SearchRowBasic {
    public $email;
    public $externalId;
    public $groupName;
    public $groupType;
    public $internalId;
    public $isDynamic;
    public $isInactive;
    public $isManufacturingWorkCenter;
    public $isPrivate;
    public $laborResources;
    public $lastModifiedDate;
    public $machineResources;
    public $owner;
    public $savedSearch;
    public $size;
    public $subsidiary;
    public $workCalendar;
    public $customFieldList;
    static $paramtypesmap = array(
        "email" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "groupName" => "SearchColumnStringField[]",
        "groupType" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isDynamic" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isManufacturingWorkCenter" => "SearchColumnBooleanField[]",
        "isPrivate" => "SearchColumnBooleanField[]",
        "laborResources" => "SearchColumnLongField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "machineResources" => "SearchColumnLongField[]",
        "owner" => "SearchColumnSelectField[]",
        "savedSearch" => "SearchColumnStringField[]",
        "size" => "SearchColumnLongField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "workCalendar" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
