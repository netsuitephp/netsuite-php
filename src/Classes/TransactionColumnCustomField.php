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

class TransactionColumnCustomField extends CustomFieldType {
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $insertBefore;
    /**
     * @var boolean
     */
    public $availableToSso;
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
     * @var string
     */
    public $linkText;
    /**
     * @var boolean
     */
    public $isMandatory;
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
    public $colExpense;
    /**
     * @var boolean
     */
    public $colPurchase;
    /**
     * @var boolean
     */
    public $colSale;
    /**
     * @var boolean
     */
    public $colOpportunity;
    /**
     * @var boolean
     */
    public $colStore;
    /**
     * @var boolean
     */
    public $colStoreHidden;
    /**
     * @var boolean
     */
    public $colJournal;
    /**
     * @var boolean
     */
    public $colBuild;
    /**
     * @var boolean
     */
    public $colExpenseReport;
    /**
     * @var boolean
     */
    public $colTime;
    /**
     * @var boolean
     */
    public $colTransferOrder;
    /**
     * @var boolean
     */
    public $colTimeGroup;
    /**
     * @var boolean
     */
    public $colItemReceipt;
    /**
     * @var boolean
     */
    public $colItemReceiptOrder;
    /**
     * @var boolean
     */
    public $colItemFulfillment;
    /**
     * @var boolean
     */
    public $colItemFulfillmentOrder;
    /**
     * @var boolean
     */
    public $colPrintFlag;
    /**
     * @var boolean
     */
    public $colPickingTicket;
    /**
     * @var boolean
     */
    public $colPackingSlip;
    /**
     * @var boolean
     */
    public $colReturnForm;
    /**
     * @var boolean
     */
    public $colStoreWithGroups;
    /**
     * @var boolean
     */
    public $colGroupOnInvoices;
    /**
     * @var boolean
     */
    public $colKitItem;
    /**
     * @var \NetSuite\Classes\TransactionColumnCustomFieldFilterList
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
        "insertBefore" => "RecordRef",
        "availableToSso" => "boolean",
        "displayType" => "CustomizationDisplayType",
        "displayWidth" => "integer",
        "displayHeight" => "integer",
        "help" => "string",
        "linkText" => "string",
        "isMandatory" => "boolean",
        "maxLength" => "integer",
        "minValue" => "float",
        "maxValue" => "float",
        "defaultChecked" => "boolean",
        "defaultValue" => "string",
        "isFormula" => "boolean",
        "defaultSelection" => "RecordRef",
        "dynamicDefault" => "CustomizationDynamicDefault",
        "sourceList" => "RecordRef",
        "sourceFrom" => "RecordRef",
        "sourceFilterBy" => "RecordRef",
        "customSegment" => "RecordRef",
        "colExpense" => "boolean",
        "colPurchase" => "boolean",
        "colSale" => "boolean",
        "colOpportunity" => "boolean",
        "colStore" => "boolean",
        "colStoreHidden" => "boolean",
        "colJournal" => "boolean",
        "colBuild" => "boolean",
        "colExpenseReport" => "boolean",
        "colTime" => "boolean",
        "colTransferOrder" => "boolean",
        "colTimeGroup" => "boolean",
        "colItemReceipt" => "boolean",
        "colItemReceiptOrder" => "boolean",
        "colItemFulfillment" => "boolean",
        "colItemFulfillmentOrder" => "boolean",
        "colPrintFlag" => "boolean",
        "colPickingTicket" => "boolean",
        "colPackingSlip" => "boolean",
        "colReturnForm" => "boolean",
        "colStoreWithGroups" => "boolean",
        "colGroupOnInvoices" => "boolean",
        "colKitItem" => "boolean",
        "filterList" => "TransactionColumnCustomFieldFilterList",
        "accessLevel" => "CustomizationAccessLevel",
        "searchLevel" => "CustomizationSearchLevel",
        "roleAccessList" => "CustomFieldRoleAccessList",
        "deptAccessList" => "CustomFieldDepartmentAccessList",
        "subAccessList" => "CustomFieldSubAccessList",
        "translationsList" => "CustomFieldTranslationsList",
        "internalId" => "string",
    );
}
