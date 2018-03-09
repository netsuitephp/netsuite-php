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

class TransactionBodyCustomField extends CustomFieldType {
    public $label;
    public $owner;
    public $description;
    public $selectRecordType;
    public $storeValue;
    public $showInList;
    public $globalSearch;
    public $isParent;
    public $insertBefore;
    public $subtab;
    public $availableToSso;
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
    public $bodyPurchase;
    public $bodySale;
    public $bodyOpportunity;
    public $bodyJournal;
    public $bodyExpenseReport;
    public $bodyStore;
    public $bodyTransferOrder;
    public $bodyItemReceipt;
    public $bodyItemReceiptOrder;
    public $bodyItemFulfillment;
    public $bodyItemFulfillmentOrder;
    public $bodyInventoryAdjustment;
    public $bodyBTegata;
    public $bodyAssemblyBuild;
    public $bodyPrintFlag;
    public $bodyPickingTicket;
    public $bodyOtherTransaction;
    public $bodyPrintPackingSlip;
    public $bodyCustomerPayment;
    public $bodyVendorPayment;
    public $bodyDeposit;
    public $bodyBom;
    public $bodyPrintStatement;
    public $filterList;
    public $accessLevel;
    public $searchLevel;
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
        "subtab" => "RecordRef",
        "availableToSso" => "boolean",
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
        "bodyPurchase" => "boolean",
        "bodySale" => "boolean",
        "bodyOpportunity" => "boolean",
        "bodyJournal" => "boolean",
        "bodyExpenseReport" => "boolean",
        "bodyStore" => "boolean",
        "bodyTransferOrder" => "boolean",
        "bodyItemReceipt" => "boolean",
        "bodyItemReceiptOrder" => "boolean",
        "bodyItemFulfillment" => "boolean",
        "bodyItemFulfillmentOrder" => "boolean",
        "bodyInventoryAdjustment" => "boolean",
        "bodyBTegata" => "boolean",
        "bodyAssemblyBuild" => "boolean",
        "bodyPrintFlag" => "boolean",
        "bodyPickingTicket" => "boolean",
        "bodyOtherTransaction" => "boolean",
        "bodyPrintPackingSlip" => "boolean",
        "bodyCustomerPayment" => "boolean",
        "bodyVendorPayment" => "boolean",
        "bodyDeposit" => "boolean",
        "bodyBom" => "boolean",
        "bodyPrintStatement" => "boolean",
        "filterList" => "TransactionBodyCustomFieldFilterList",
        "accessLevel" => "CustomizationAccessLevel",
        "searchLevel" => "CustomizationSearchLevel",
        "roleAccessList" => "CustomFieldRoleAccessList",
        "deptAccessList" => "CustomFieldDepartmentAccessList",
        "subAccessList" => "CustomFieldSubAccessList",
        "translationsList" => "CustomFieldTranslationsList",
        "internalId" => "string",
    );
}
