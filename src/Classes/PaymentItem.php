<?php

class PaymentItem extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $description;
	public $paymentMethod;
	public $undepFunds;
	public $includeChildren;
	public $issueProduct;
	public $account;
	public $customForm;
	public $itemId;
	public $displayName;
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
		"paymentMethod" => "RecordRef",
		"undepFunds" => "boolean",
		"includeChildren" => "boolean",
		"issueProduct" => "RecordRef",
		"account" => "RecordRef",
		"customForm" => "RecordRef",
		"itemId" => "string",
		"displayName" => "string",
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

