<?php namespace Fungku\NetSuite\Classes;

class AddressSearchBasic extends SearchRecordBasic {
	public $address;
	public $address1;
	public $address2;
	public $address3;
	public $addressee;
	public $attention;
	public $city;
	public $country;
	public $countryCode;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $override;
	public $phone;
	public $state;
	public $zip;
	public $customFieldList;
	static $paramtypesmap = array(
		"address" => "SearchStringField",
		"address1" => "SearchStringField",
		"address2" => "SearchStringField",
		"address3" => "SearchStringField",
		"addressee" => "SearchStringField",
		"attention" => "SearchStringField",
		"city" => "SearchStringField",
		"country" => "SearchEnumMultiSelectField",
		"countryCode" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"override" => "SearchBooleanField",
		"phone" => "SearchStringField",
		"state" => "SearchStringField",
		"zip" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

