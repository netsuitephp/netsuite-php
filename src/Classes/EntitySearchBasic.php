<?php

namespace Fungku\NetSuite\Classes;

class EntitySearchBasic extends SearchRecordBasic {
	public $address;
	public $addressee;
	public $addressLabel;
	public $addressPhone;
	public $attention;
	public $city;
	public $comments;
	public $country;
	public $county;
	public $dateCreated;
	public $email;
	public $entityId;
	public $externalId;
	public $externalIdString;
	public $fax;
	public $giveAccess;
	public $globalSubscriptionStatus;
	public $image;
	public $internalId;
	public $internalIdNumber;
	public $isDefaultBilling;
	public $isDefaultShipping;
	public $isInactive;
	public $language;
	public $lastModifiedDate;
	public $level;
	public $permission;
	public $phone;
	public $phoneticName;
	public $state;
	public $subsidiary;
	public $type;
	public $zipCode;
	public $customFieldList;
	static $paramtypesmap = array(
		"address" => "SearchStringField",
		"addressee" => "SearchStringField",
		"addressLabel" => "SearchStringField",
		"addressPhone" => "SearchStringField",
		"attention" => "SearchStringField",
		"city" => "SearchStringField",
		"comments" => "SearchStringField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"dateCreated" => "SearchDateField",
		"email" => "SearchStringField",
		"entityId" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fax" => "SearchStringField",
		"giveAccess" => "SearchBooleanField",
		"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
		"image" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDefaultBilling" => "SearchBooleanField",
		"isDefaultShipping" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"language" => "SearchEnumMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"level" => "SearchEnumMultiSelectField",
		"permission" => "SearchEnumMultiSelectField",
		"phone" => "SearchStringField",
		"phoneticName" => "SearchStringField",
		"state" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"type" => "SearchEnumMultiSelectField",
		"zipCode" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

