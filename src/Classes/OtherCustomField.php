<?php

class OtherCustomField extends CustomFieldType {
	public $recType;
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
	public $filterList;
	public $accessLevel;
	public $searchLevel;
	public $roleAccessList;
	public $deptAccessList;
	public $subAccessList;
	public $translationsList;
	public $internalId;
	static $paramtypesmap = array(
		"recType" => "RecordRef",
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
		"filterList" => "OtherCustomFieldFilterList",
		"accessLevel" => "CustomizationAccessLevel",
		"searchLevel" => "CustomizationSearchLevel",
		"roleAccessList" => "CustomFieldRoleAccessList",
		"deptAccessList" => "CustomFieldDepartmentAccessList",
		"subAccessList" => "CustomFieldSubAccessList",
		"translationsList" => "CustomFieldTranslationsList",
		"internalId" => "string",
	);
}

