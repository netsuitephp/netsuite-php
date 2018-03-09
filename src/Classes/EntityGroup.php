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

class EntityGroup extends Record {
    public $groupName;
    public $groupType;
    public $email;
    public $groupOwner;
    public $isSavedSearch;
    public $parentGroupType;
    public $savedSearch;
    public $isSalesTeam;
    public $comments;
    public $isPrivate;
    public $restrictionGroup;
    public $isInactive;
    public $isSalesRep;
    public $isSupportRep;
    public $isProductTeam;
    public $isFunctionalTeam;
    public $issueRole;
    public $isManufacturingWorkCenter;
    public $subsidiary;
    public $machineResources;
    public $laborResources;
    public $workCalendar;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "groupName" => "string",
        "groupType" => "EntityGroupType",
        "email" => "string",
        "groupOwner" => "RecordRef",
        "isSavedSearch" => "boolean",
        "parentGroupType" => "EntityGroupType",
        "savedSearch" => "RecordRef",
        "isSalesTeam" => "boolean",
        "comments" => "string",
        "isPrivate" => "boolean",
        "restrictionGroup" => "RecordRef",
        "isInactive" => "boolean",
        "isSalesRep" => "boolean",
        "isSupportRep" => "boolean",
        "isProductTeam" => "boolean",
        "isFunctionalTeam" => "boolean",
        "issueRole" => "RecordRef",
        "isManufacturingWorkCenter" => "boolean",
        "subsidiary" => "RecordRef",
        "machineResources" => "integer",
        "laborResources" => "integer",
        "workCalendar" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
