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

class CustomRecordType extends Record {
    /**
     * @var string
     */
    public $recordName;
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
     * @var \NetSuite\Classes\CustomRecordTypeAccessType
     */
    public $accessType;
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
    public $enableMailMerge;
    /**
     * @var boolean
     */
    public $isOrdered;
    /**
     * @var boolean
     */
    public $isAvailableOffline;
    /**
     * @var boolean
     */
    public $allowQuickSearch;
    /**
     * @var boolean
     */
    public $hierarchical;
    /**
     * @var boolean
     */
    public $enableDle;
    /**
     * @var boolean
     */
    public $enableNameTranslation;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var string
     */
    public $disclaimer;
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $owner;
    /**
     * @var string
     */
    public $description;
    /**
     * @var \NetSuite\Classes\CustomRecordTypeTabsList
     */
    public $tabsList;
    /**
     * @var \NetSuite\Classes\CustomRecordTypeSublistsList
     */
    public $sublistsList;
    /**
     * @var \NetSuite\Classes\CustomRecordTypeFormsList
     */
    public $formsList;
    /**
     * @var \NetSuite\Classes\CustomRecordTypeOnlineFormsList
     */
    public $onlineFormsList;
    /**
     * @var \NetSuite\Classes\CustomRecordTypePermissionsList
     */
    public $permissionsList;
    /**
     * @var \NetSuite\Classes\CustomRecordTypeLinksList
     */
    public $linksList;
    /**
     * @var \NetSuite\Classes\CustomRecordTypeManagersList
     */
    public $managersList;
    /**
     * @var \NetSuite\Classes\CustomRecordTypeChildrenList
     */
    public $childrenList;
    /**
     * @var \NetSuite\Classes\CustomRecordTypeParentsList
     */
    public $parentsList;
    /**
     * @var \NetSuite\Classes\CustomRecordTypeTranslationsList
     */
    public $translationsList;
    /**
     * @var string
     */
    public $scriptId;
    /**
     * @var \NetSuite\Classes\CustomRecordTypeFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    static $paramtypesmap = array(
        "recordName" => "string",
        "includeName" => "boolean",
        "showId" => "boolean",
        "showCreationDate" => "boolean",
        "showCreationDateOnList" => "boolean",
        "showLastModified" => "boolean",
        "showLastModifiedOnList" => "boolean",
        "showOwner" => "boolean",
        "showOwnerOnList" => "boolean",
        "showOwnerAllowChange" => "boolean",
        "accessType" => "CustomRecordTypeAccessType",
        "allowAttachments" => "boolean",
        "showNotes" => "boolean",
        "enableMailMerge" => "boolean",
        "isOrdered" => "boolean",
        "isAvailableOffline" => "boolean",
        "allowQuickSearch" => "boolean",
        "hierarchical" => "boolean",
        "enableDle" => "boolean",
        "enableNameTranslation" => "boolean",
        "isInactive" => "boolean",
        "disclaimer" => "string",
        "enableNumbering" => "boolean",
        "numberingPrefix" => "string",
        "numberingSuffix" => "string",
        "numberingMinDigits" => "integer",
        "numberingInit" => "integer",
        "numberingCurrentNumber" => "integer",
        "allowNumberingOverride" => "boolean",
        "isNumberingUpdateable" => "boolean",
        "owner" => "RecordRef",
        "description" => "string",
        "tabsList" => "CustomRecordTypeTabsList",
        "sublistsList" => "CustomRecordTypeSublistsList",
        "formsList" => "CustomRecordTypeFormsList",
        "onlineFormsList" => "CustomRecordTypeOnlineFormsList",
        "permissionsList" => "CustomRecordTypePermissionsList",
        "linksList" => "CustomRecordTypeLinksList",
        "managersList" => "CustomRecordTypeManagersList",
        "childrenList" => "CustomRecordTypeChildrenList",
        "parentsList" => "CustomRecordTypeParentsList",
        "translationsList" => "CustomRecordTypeTranslationsList",
        "scriptId" => "string",
        "customFieldList" => "CustomRecordTypeFieldList",
        "internalId" => "string",
    );
}
