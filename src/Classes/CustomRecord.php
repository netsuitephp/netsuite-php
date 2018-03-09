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

class CustomRecord extends Record {
    public $customRecordId;
    public $customForm;
    public $isInactive;
    public $parent;
    public $disclaimer;
    public $created;
    public $lastModified;
    public $name;
    public $autoName;
    public $altName;
    public $owner;
    public $recType;
    public $enableNumbering;
    public $numberingPrefix;
    public $numberingSuffix;
    public $numberingMinDigits;
    public $description;
    public $numberingInit;
    public $numberingCurrentNumber;
    public $allowNumberingOverride;
    public $isNumberingUpdateable;
    public $translationsList;
    public $includeName;
    public $showId;
    public $showCreationDate;
    public $showCreationDateOnList;
    public $showLastModified;
    public $showLastModifiedOnList;
    public $showOwner;
    public $showOwnerOnList;
    public $showOwnerAllowChange;
    public $usePermissions;
    public $allowAttachments;
    public $showNotes;
    public $enablEmailMerge;
    public $isOrdered;
    public $allowInlineEditing;
    public $isAvailableOffline;
    public $allowQuickSearch;
    public $recordName;
    public $scriptId;
    public $customFieldList;
    public $internalId;
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
