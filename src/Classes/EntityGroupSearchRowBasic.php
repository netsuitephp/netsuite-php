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

class EntityGroupSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $email;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $groupName;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $groupType;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isDynamic;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isManufacturingWorkCenter;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isPrivate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $laborResources;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $machineResources;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $owner;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $savedSearch;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $size;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $workCalendar;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
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
        "laborResources" => "SearchColumnDoubleField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "machineResources" => "SearchColumnDoubleField[]",
        "owner" => "SearchColumnSelectField[]",
        "savedSearch" => "SearchColumnStringField[]",
        "size" => "SearchColumnLongField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "workCalendar" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
