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

class EntityCustomField extends CustomFieldType {
    public $label;
    public $owner;
    public $description;
    public $selectRecordType;
    public $storeValue;
    public $showInList;
    public $globalSearch;
    public $isParent;
    public $insertBefore;
    public $availableToSso;
    public $subtab;
    public $displayType;
    public $displayWidth;
    public $displayHeight;
    public $help;
    public $parentSubtab;
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
    public $appliesToCustomer;
    public $appliesToProject;
    public $appliesToVendor;
    public $appliesToEmployee;
    public $appliesToOtherName;
    public $appliesToContact;
    public $appliesToPartner;
    public $appliesToWebSite;
    public $appliesToGroup;
    public $availableExternally;
    public $filterList;
    public $accessLevel;
    public $appliesToStatement;
    public $searchLevel;
    public $appliesToPriceList;
    public $roleAccessList;
    public $deptAccessList;
    public $subAccessList;
    public $translationsList;
    public $internalId;
    static $paramtypesmap = array(
        "label" => "string",
        "owner" => "RecordRef",
        "description" => "string",
        "selectRecordType" => "RecordRef",
        "storeValue" => "boolean",
        "showInList" => "boolean",
        "globalSearch" => "boolean",
        "isParent" => "boolean",
        "insertBefore" => "RecordRef",
        "availableToSso" => "boolean",
        "subtab" => "RecordRef",
        "displayType" => "CustomizationDisplayType",
        "displayWidth" => "integer",
        "displayHeight" => "integer",
        "help" => "string",
        "parentSubtab" => "RecordRef",
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
        "appliesToCustomer" => "boolean",
        "appliesToProject" => "boolean",
        "appliesToVendor" => "boolean",
        "appliesToEmployee" => "boolean",
        "appliesToOtherName" => "boolean",
        "appliesToContact" => "boolean",
        "appliesToPartner" => "boolean",
        "appliesToWebSite" => "boolean",
        "appliesToGroup" => "boolean",
        "availableExternally" => "boolean",
        "filterList" => "EntityCustomFieldFilterList",
        "accessLevel" => "CustomizationAccessLevel",
        "appliesToStatement" => "boolean",
        "searchLevel" => "CustomizationSearchLevel",
        "appliesToPriceList" => "boolean",
        "roleAccessList" => "CustomFieldRoleAccessList",
        "deptAccessList" => "CustomFieldDepartmentAccessList",
        "subAccessList" => "CustomFieldSubAccessList",
        "translationsList" => "CustomFieldTranslationsList",
        "internalId" => "string",
    );
}
