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

class EntityGroupSearchBasic extends SearchRecordBasic {
    public $email;
    public $externalId;
    public $externalIdString;
    public $groupName;
    public $groupOwner;
    public $groupType;
    public $internalId;
    public $internalIdNumber;
    public $isDynamic;
    public $isInactive;
    public $isManufacturingWorkCenter;
    public $isPrivate;
    public $laborResources;
    public $lastModifiedDate;
    public $machineResources;
    public $subsidiary;
    public $workCalendar;
    public $customFieldList;
    static $paramtypesmap = array(
        "email" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "groupName" => "SearchStringField",
        "groupOwner" => "SearchMultiSelectField",
        "groupType" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isDynamic" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "isManufacturingWorkCenter" => "SearchBooleanField",
        "isPrivate" => "SearchBooleanField",
        "laborResources" => "SearchLongField",
        "lastModifiedDate" => "SearchDateField",
        "machineResources" => "SearchLongField",
        "subsidiary" => "SearchMultiSelectField",
        "workCalendar" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
