<?php

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

