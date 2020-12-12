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

class CrmCustomField extends CustomFieldType {
    /**
     * @var string
     */
    public $label;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $owner;
    /**
     * @var string
     */
    public $description;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $selectRecordType;
    /**
     * @var boolean
     */
    public $storeValue;
    /**
     * @var boolean
     */
    public $showInList;
    /**
     * @var boolean
     */
    public $globalSearch;
    /**
     * @var boolean
     */
    public $isParent;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $insertBefore;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subtab;
    /**
     * @var \NetSuite\Classes\CustomizationDisplayType
     */
    public $displayType;
    /**
     * @var integer
     */
    public $displayWidth;
    /**
     * @var integer
     */
    public $displayHeight;
    /**
     * @var string
     */
    public $help;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $parentSubtab;
    /**
     * @var string
     */
    public $linkText;
    /**
     * @var boolean
     */
    public $isMandatory;
    /**
     * @var boolean
     */
    public $checkSpelling;
    /**
     * @var integer
     */
    public $maxLength;
    /**
     * @var float
     */
    public $minValue;
    /**
     * @var float
     */
    public $maxValue;
    /**
     * @var boolean
     */
    public $defaultChecked;
    /**
     * @var string
     */
    public $defaultValue;
    /**
     * @var boolean
     */
    public $isFormula;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $defaultSelection;
    /**
     * @var \NetSuite\Classes\CustomizationDynamicDefault
     */
    public $dynamicDefault;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $searchDefault;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $searchCompareField;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $sourceList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $sourceFrom;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $sourceFilterBy;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customSegment;
    /**
     * @var boolean
     */
    public $appliesToTask;
    /**
     * @var boolean
     */
    public $appliesToMfgProjectTask;
    /**
     * @var boolean
     */
    public $appliesToProjectTask;
    /**
     * @var boolean
     */
    public $appliesToPhoneCall;
    /**
     * @var boolean
     */
    public $appliesToEvent;
    /**
     * @var boolean
     */
    public $appliesToCase;
    /**
     * @var boolean
     */
    public $appliesToCampaign;
    /**
     * @var boolean
     */
    public $appliesPerKeyword;
    /**
     * @var boolean
     */
    public $appliesToSolution;
    /**
     * @var boolean
     */
    public $appliesToIssue;
    /**
     * @var boolean
     */
    public $availableExternally;
    /**
     * @var boolean
     */
    public $availableToSso;
    /**
     * @var boolean
     */
    public $showIssueChanges;
    /**
     * @var \NetSuite\Classes\CrmCustomFieldFilterList
     */
    public $filterList;
    /**
     * @var \NetSuite\Classes\CustomizationAccessLevel
     */
    public $accessLevel;
    /**
     * @var \NetSuite\Classes\CustomizationSearchLevel
     */
    public $searchLevel;
    /**
     * @var \NetSuite\Classes\CustomFieldRoleAccessList
     */
    public $roleAccessList;
    /**
     * @var \NetSuite\Classes\CustomFieldDepartmentAccessList
     */
    public $deptAccessList;
    /**
     * @var \NetSuite\Classes\CustomFieldSubAccessList
     */
    public $subAccessList;
    /**
     * @var \NetSuite\Classes\CustomFieldTranslationsList
     */
    public $translationsList;
    /**
     * @var string
     */
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
        "customSegment" => "RecordRef",
        "appliesToTask" => "boolean",
        "appliesToMfgProjectTask" => "boolean",
        "appliesToProjectTask" => "boolean",
        "appliesToPhoneCall" => "boolean",
        "appliesToEvent" => "boolean",
        "appliesToCase" => "boolean",
        "appliesToCampaign" => "boolean",
        "appliesPerKeyword" => "boolean",
        "appliesToSolution" => "boolean",
        "appliesToIssue" => "boolean",
        "availableExternally" => "boolean",
        "availableToSso" => "boolean",
        "showIssueChanges" => "boolean",
        "filterList" => "CrmCustomFieldFilterList",
        "accessLevel" => "CustomizationAccessLevel",
        "searchLevel" => "CustomizationSearchLevel",
        "roleAccessList" => "CustomFieldRoleAccessList",
        "deptAccessList" => "CustomFieldDepartmentAccessList",
        "subAccessList" => "CustomFieldSubAccessList",
        "translationsList" => "CustomFieldTranslationsList",
        "internalId" => "string",
    );
}
