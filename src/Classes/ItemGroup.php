<?php

namespace Fungku\NetSuite\Classes;

class ItemGroup extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $customForm;
	public $includeStartEndLines;
	public $isVsoeBundle;
	public $defaultItemShipMethod;
	public $availableToPartners;
	public $isInactive;
	public $itemId;
	public $upcCode;
	public $displayName;
	public $vendorName;
	public $issueProduct;
	public $parent;
	public $description;
	public $subsidiaryList;
	public $includeChildren;
	public $department;
	public $class;
	public $location;
	public $itemCarrier;
	public $itemShipMethodList;
	public $printItems;
	public $memberList;
	public $translationsList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"includeStartEndLines" => "boolean",
		"isVsoeBundle" => "boolean",
		"defaultItemShipMethod" => "RecordRef",
		"availableToPartners" => "boolean",
		"isInactive" => "boolean",
		"itemId" => "string",
		"upcCode" => "string",
		"displayName" => "string",
		"vendorName" => "string",
		"issueProduct" => "RecordRef",
		"parent" => "RecordRef",
		"description" => "string",
		"subsidiaryList" => "RecordRefList",
		"includeChildren" => "boolean",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"itemCarrier" => "ItemCarrier",
		"itemShipMethodList" => "RecordRefList",
		"printItems" => "boolean",
		"memberList" => "ItemMemberList",
		"translationsList" => "TranslationList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

