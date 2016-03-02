<?php

namespace Fungku\NetSuite\Classes;

class SubtotalItem extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $displayName;
	public $issueProduct;
	public $description;
	public $includeChildren;
	public $customForm;
	public $itemId;
	public $isInactive;
	public $availableToPartners;
	public $department;
	public $class;
	public $location;
	public $subsidiaryList;
	public $translationsList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"displayName" => "string",
		"issueProduct" => "RecordRef",
		"description" => "string",
		"includeChildren" => "boolean",
		"customForm" => "RecordRef",
		"itemId" => "string",
		"isInactive" => "boolean",
		"availableToPartners" => "boolean",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"subsidiaryList" => "RecordRefList",
		"translationsList" => "TranslationList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

