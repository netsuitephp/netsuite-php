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

class CustomRecordSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $recType;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $altName;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $availableOffline;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $created;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $id;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastModified;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $lastModifiedBy;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $owner;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $parent;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "recType" => "RecordRef",
        "altName" => "SearchColumnStringField[]",
        "availableOffline" => "SearchColumnBooleanField[]",
        "created" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "id" => "SearchColumnLongField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "lastModified" => "SearchColumnDateField[]",
        "lastModifiedBy" => "SearchColumnSelectField[]",
        "name" => "SearchColumnStringField[]",
        "owner" => "SearchColumnSelectField[]",
        "parent" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
