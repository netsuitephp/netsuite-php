<?php

namespace Fungku\NetSuite\Classes;

class LocationSearchRowBasic extends SearchRowBasic {
	public $address1;
	public $address2;
	public $address3;
	public $city;
	public $country;
	public $externalId;
	public $internalId;
	public $isInactive;
	public $isOffice;
	public $makeInventoryAvailable;
	public $makeInventoryAvailableStore;
	public $name;
	public $nameNoHierarchy;
	public $phone;
	public $state;
	public $subsidiary;
	public $tranPrefix;
	public $zip;
	public $customFieldList;
	static $paramtypesmap = array(
		"address1" => "SearchColumnStringField[]",
		"address2" => "SearchColumnStringField[]",
		"address3" => "SearchColumnStringField[]",
		"city" => "SearchColumnStringField[]",
		"country" => "SearchColumnEnumSelectField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isOffice" => "SearchColumnBooleanField[]",
		"makeInventoryAvailable" => "SearchColumnBooleanField[]",
		"makeInventoryAvailableStore" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"nameNoHierarchy" => "SearchColumnStringField[]",
		"phone" => "SearchColumnStringField[]",
		"state" => "SearchColumnStringField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"tranPrefix" => "SearchColumnStringField[]",
		"zip" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

