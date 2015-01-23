<?php

class LocationSearchBasic extends SearchRecordBasic {
	public $address;
	public $city;
	public $country;
	public $county;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $isInactive;
	public $isOffice;
	public $makeInventoryAvailable;
	public $makeInventoryAvailableStore;
	public $name;
	public $nameNoHierarchy;
	public $phone;
	public $state;
	public $subsidiary;
	public $tranprefix;
	public $zip;
	public $customFieldList;
	static $paramtypesmap = array(
		"address" => "SearchStringField",
		"city" => "SearchStringField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isOffice" => "SearchBooleanField",
		"makeInventoryAvailable" => "SearchBooleanField",
		"makeInventoryAvailableStore" => "SearchBooleanField",
		"name" => "SearchStringField",
		"nameNoHierarchy" => "SearchStringField",
		"phone" => "SearchStringField",
		"state" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"tranprefix" => "SearchStringField",
		"zip" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

