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

class CustomRecord extends Record {
    /**
     * @var string
     */
    public $customRecordId;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $parent;
    /**
     * @var string
     */
    public $disclaimer;
    /**
     * @var string
     */
    public $created;
    /**
     * @var string
     */
    public $lastModified;
    /**
     * @var string
     */
    public $name;
    /**
     * @var boolean
     */
    public $autoName;
    /**
     * @var string
     */
    public $altName;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $owner;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $recType;
    /**
     * @var boolean
     */
    public $enableNumbering;
    /**
     * @var string
     */
    public $numberingPrefix;
    /**
     * @var string
     */
    public $numberingSuffix;
    /**
     * @var integer
     */
    public $numberingMinDigits;
    /**
     * @var string
     */
    public $description;
    /**
     * @var integer
     */
    public $numberingInit;
    /**
     * @var integer
     */
    public $numberingCurrentNumber;
    /**
     * @var boolean
     */
    public $allowNumberingOverride;
    /**
     * @var boolean
     */
    public $isNumberingUpdateable;
    /**
     * @var \NetSuite\Classes\CustomRecordTranslationsList
     */
    public $translationsList;
    /**
     * @var boolean
     */
    public $includeName;
    /**
     * @var boolean
     */
    public $showId;
    /**
     * @var boolean
     */
    public $showCreationDate;
    /**
     * @var boolean
     */
    public $showCreationDateOnList;
    /**
     * @var boolean
     */
    public $showLastModified;
    /**
     * @var boolean
     */
    public $showLastModifiedOnList;
    /**
     * @var boolean
     */
    public $showOwner;
    /**
     * @var boolean
     */
    public $showOwnerOnList;
    /**
     * @var boolean
     */
    public $showOwnerAllowChange;
    /**
     * @var boolean
     */
    public $usePermissions;
    /**
     * @var boolean
     */
    public $allowAttachments;
    /**
     * @var boolean
     */
    public $showNotes;
    /**
     * @var boolean
     */
    public $enablEmailMerge;
    /**
     * @var boolean
     */
    public $isOrdered;
    /**
     * @var boolean
     */
    public $allowInlineEditing;
    /**
     * @var boolean
     */
    public $isAvailableOffline;
    /**
     * @var boolean
     */
    public $allowQuickSearch;
    /**
     * @var string
     */
    public $recordName;
    /**
     * @var string
     */
    public $scriptId;
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
        "customRecordId" => "string",
        "customForm" => "RecordRef",
        "isInactive" => "boolean",
        "parent" => "RecordRef",
        "disclaimer" => "string",
        "created" => "dateTime",
        "lastModified" => "dateTime",
        "name" => "string",
        "autoName" => "boolean",
        "altName" => "string",
        "owner" => "RecordRef",
        "recType" => "RecordRef",
        "enableNumbering" => "boolean",
        "numberingPrefix" => "string",
        "numberingSuffix" => "string",
        "numberingMinDigits" => "integer",
        "description" => "string",
        "numberingInit" => "integer",
        "numberingCurrentNumber" => "integer",
        "allowNumberingOverride" => "boolean",
        "isNumberingUpdateable" => "boolean",
        "translationsList" => "CustomRecordTranslationsList",
        "includeName" => "boolean",
        "showId" => "boolean",
        "showCreationDate" => "boolean",
        "showCreationDateOnList" => "boolean",
        "showLastModified" => "boolean",
        "showLastModifiedOnList" => "boolean",
        "showOwner" => "boolean",
        "showOwnerOnList" => "boolean",
        "showOwnerAllowChange" => "boolean",
        "usePermissions" => "boolean",
        "allowAttachments" => "boolean",
        "showNotes" => "boolean",
        "enablEmailMerge" => "boolean",
        "isOrdered" => "boolean",
        "allowInlineEditing" => "boolean",
        "isAvailableOffline" => "boolean",
        "allowQuickSearch" => "boolean",
        "recordName" => "string",
        "scriptId" => "string",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
