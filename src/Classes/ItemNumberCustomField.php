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

class ItemNumberCustomField extends CustomFieldType {
    public $label;
    public $owner;
    public $description;
    public $selectRecordType;
    public $storeValue;
    public $showInList;
    public $insertBefore;
    public $displayType;
    public $displayWidth;
    public $displayHeight;
    public $help;
    public $linkText;
    public $isMandatory;
    public $checkSpelling;
    public $maxLength;
    public $minValue;
    public $maxValue;
    public $defaultChecked;
    public $defaultValue;
    public $isFormula;
    public $defaultSelection;
    public $dynamicDefault;
    public $searchDefault;
    public $searchCompareField;
    public $sourceList;
    public $sourceFrom;
    public $sourceFilterBy;
    public $accessLevel;
    public $searchLevel;
    public $filterList;
    public $roleAccessList;
    public $deptAccessList;
    public $appliesToAllItems;
    public $appliesToSerialized;
    public $appliesToLots;
    public $appliesToGiftCerts;
    public $itemsList;
    public $translationsList;
    public $internalId;
    static $paramtypesmap = array(
        "label" => "string",
        "owner" => "RecordRef",
        "description" => "string",
        "selectRecordType" => "RecordRef",
        "storeValue" => "boolean",
        "showInList" => "boolean",
        "insertBefore" => "RecordRef",
        "displayType" => "CustomizationDisplayType",
        "displayWidth" => "integer",
        "displayHeight" => "integer",
        "help" => "string",
        "linkText" => "string",
        "isMandatory" => "boolean",
        "checkSpelling" => "boolean",
        "maxLength" => "integer",
        "minValue" => "float",
        "maxValue" => "float",
        "defaultChecked" => "boolean",
        "defaultValue" => "string",
        "isFormula" => "boolean",
        "defaultSelection" => "RecordRef",
        "dynamicDefault" => "CustomizationDynamicDefault",
        "searchDefault" => "RecordRef",
        "searchCompareField" => "RecordRef",
        "sourceList" => "RecordRef",
        "sourceFrom" => "RecordRef",
        "sourceFilterBy" => "RecordRef",
        "accessLevel" => "CustomizationAccessLevel",
        "searchLevel" => "CustomizationSearchLevel",
        "filterList" => "ItemNumberCustomFieldFilterList",
        "roleAccessList" => "CustomFieldRoleAccessList",
        "deptAccessList" => "CustomFieldDepartmentAccessList",
        "appliesToAllItems" => "boolean",
        "appliesToSerialized" => "boolean",
        "appliesToLots" => "boolean",
        "appliesToGiftCerts" => "boolean",
        "itemsList" => "RecordRefList",
        "translationsList" => "CustomFieldTranslationsList",
        "internalId" => "string",
    );
}
