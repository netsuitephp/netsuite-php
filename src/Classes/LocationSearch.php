<?php namespace Fungku\NetSuite\Classes;

class LocationSearch extends SearchRecord {
	public $basic;
	public $addressJoin;
	public $returnAddressJoin;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "LocationSearchBasic",
		"addressJoin" => "AddressSearchBasic",
		"returnAddressJoin" => "AddressSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

