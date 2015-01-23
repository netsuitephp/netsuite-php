<?php

class ItemOptionCustomField extends CustomFieldType {
	public $label;
	public $owner;
	public $description;
	public $selectRecordType;
	public $storeValue;
	public $insertBefore;
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
	public $searchDefault;
	public $searchCompareField;
	public $sourceList;
	public $sourceFrom;
	public $sourceFilterBy;
	public $colPurchase;
	public $colSale;
	public $colOpportunity;
	public $colStore;
	public $colStoreHidden;
	public $colTransferOrder;
	public $colAllItems;
	public $itemsList;
	public $colKitItem;
	public $filterList;
	public $colOptionLabel;
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
		"searchDefault" => "RecordRef",
		"searchCompareField" => "RecordRef",
		"sourceList" => "RecordRef",
		"sourceFrom" => "RecordRef",
		"sourceFilterBy" => "RecordRef",
		"colPurchase" => "boolean",
		"colSale" => "boolean",
		"colOpportunity" => "boolean",
		"colStore" => "boolean",
		"colStoreHidden" => "boolean",
		"colTransferOrder" => "boolean",
		"colAllItems" => "boolean",
		"itemsList" => "ItemsList",
		"colKitItem" => "boolean",
		"filterList" => "ItemOptionCustomFieldFilterList",
		"colOptionLabel" => "string",
		"accessLevel" => "CustomizationAccessLevel",
		"searchLevel" => "CustomizationSearchLevel",
		"roleAccessList" => "CustomFieldRoleAccessList",
		"deptAccessList" => "CustomFieldDepartmentAccessList",
		"subAccessList" => "CustomFieldSubAccessList",
		"translationsList" => "CustomFieldTranslationsList",
		"internalId" => "string",
	);
}

