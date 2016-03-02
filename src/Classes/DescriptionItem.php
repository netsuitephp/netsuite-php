<?php

namespace Fungku\NetSuite\Classes;

class DescriptionItem extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $description;
	public $includeChildren;
	public $customForm;
	public $itemId;
	public $issueProduct;
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
		"description" => "string",
		"includeChildren" => "boolean",
		"customForm" => "RecordRef",
		"itemId" => "string",
		"issueProduct" => "RecordRef",
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

