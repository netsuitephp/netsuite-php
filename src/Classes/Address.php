<?php

namespace Fungku\NetSuite\Classes;

class Address extends Record {
	public $internalId;
	public $country;
	public $attention;
	public $addressee;
	public $addrPhone;
	public $addr1;
	public $addr2;
	public $addr3;
	public $city;
	public $state;
	public $zip;
	public $addrText;
	public $override;
	public $customFieldList;
	static $paramtypesmap = array(
		"internalId" => "string",
		"country" => "Country",
		"attention" => "string",
		"addressee" => "string",
		"addrPhone" => "string",
		"addr1" => "string",
		"addr2" => "string",
		"addr3" => "string",
		"city" => "string",
		"state" => "string",
		"zip" => "string",
		"addrText" => "string",
		"override" => "boolean",
		"customFieldList" => "CustomFieldList",
	);
}

