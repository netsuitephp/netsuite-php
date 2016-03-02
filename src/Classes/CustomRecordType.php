<?php

namespace Fungku\NetSuite\Classes;

class CustomRecordType extends Record {
	public $recordName;
	public $includeName;
	public $showId;
	public $showCreationDate;
	public $showCreationDateOnList;
	public $showLastModified;
	public $showLastModifiedOnList;
	public $showOwner;
	public $showOwnerOnList;
	public $showOwnerAllowChange;
	public $accessType;
	public $allowAttachments;
	public $showNotes;
	public $enableMailMerge;
	public $isOrdered;
	public $isAvailableOffline;
	public $allowQuickSearch;
	public $hierarchical;
	public $enableDle;
	public $enableNameTranslation;
	public $isInactive;
	public $disclaimer;
	public $enableNumbering;
	public $numberingPrefix;
	public $numberingSuffix;
	public $numberingMinDigits;
	public $numberingInit;
	public $numberingCurrentNumber;
	public $allowNumberingOverride;
	public $isNumberingUpdateable;
	public $owner;
	public $description;
	public $tabsList;
	public $sublistsList;
	public $formsList;
	public $onlineFormsList;
	public $permissionsList;
	public $linksList;
	public $managersList;
	public $childrenList;
	public $parentsList;
	public $translationsList;
	public $scriptId;
	public $customFieldList;
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

