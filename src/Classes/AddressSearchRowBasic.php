<?php namespace Fungku\NetSuite\Classes;

class AddressSearchRowBasic extends SearchRowBasic {
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
	public $internalId;
	public $override;
	public $phone;
	public $state;
	public $zip;
	public $customFieldList;
	static $paramtypesmap = array(
		"address" => "SearchColumnStringField[]",
		"address1" => "SearchColumnStringField[]",
		"address2" => "SearchColumnStringField[]",
		"address3" => "SearchColumnStringField[]",
		"addressee" => "SearchColumnStringField[]",
		"attention" => "SearchColumnStringField[]",
		"city" => "SearchColumnStringField[]",
		"country" => "SearchColumnEnumSelectField[]",
		"countryCode" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"override" => "SearchColumnBooleanField[]",
		"phone" => "SearchColumnStringField[]",
		"state" => "SearchColumnStringField[]",
		"zip" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

