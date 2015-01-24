<?php namespace Fungku\NetSuite\Classes;

class TransactionColumnCustomField extends CustomFieldType {
	public $label;
	public $owner;
	public $description;
	public $selectRecordType;
	public $storeValue;
	public $insertBefore;
	public $availableToSso;
	public $displayType;
	public $displayWidth;
	public $displayHeight;
	public $help;
	public $linkText;
	public $isMandatory;
	public $maxLength;
	public $minValue;
	public $maxValue;
	public $defaultChecked;
	public $defaultValue;
	public $isFormula;
	public $defaultSelection;
	public $dynamicDefault;
	public $sourceList;
	public $sourceFrom;
	public $sourceFilterBy;
	public $colExpense;
	public $colPurchase;
	public $colSale;
	public $colOpportunity;
	public $colStore;
	public $colStoreHidden;
	public $colJournal;
	public $colBuild;
	public $colExpenseReport;
	public $colTime;
	public $colTransferOrder;
	public $colTimeGroup;
	public $colItemReceipt;
	public $colItemReceiptOrder;
	public $colItemFulfillment;
	public $colItemFulfillmentOrder;
	public $colPrintFlag;
	public $colPickingTicket;
	public $colPackingSlip;
	public $colReturnForm;
	public $colStoreWithGroups;
	public $colGroupOnInvoices;
	public $colKitItem;
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

