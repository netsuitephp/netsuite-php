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

class EntityGroup extends Record {
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var \NetSuite\Classes\EntityGroupType
     */
    public $groupType;
    /**
     * @var string
     */
    public $email;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $groupOwner;
    /**
     * @var boolean
     */
    public $isSavedSearch;
    /**
     * @var \NetSuite\Classes\EntityGroupType
     */
    public $parentGroupType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $savedSearch;
    /**
     * @var boolean
     */
    public $isSalesTeam;
    /**
     * @var string
     */
    public $comments;
    /**
     * @var boolean
     */
    public $isPrivate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $restrictionGroup;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var boolean
     */
    public $isSalesRep;
    /**
     * @var boolean
     */
    public $isSupportRep;
    /**
     * @var boolean
     */
    public $isProductTeam;
    /**
     * @var boolean
     */
    public $isFunctionalTeam;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $issueRole;
    /**
     * @var boolean
     */
    public $isManufacturingWorkCenter;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var float
     */
    public $machineResources;
    /**
     * @var float
     */
    public $laborResources;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $workCalendar;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
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
        "machineResources" => "float",
        "laborResources" => "float",
        "workCalendar" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
