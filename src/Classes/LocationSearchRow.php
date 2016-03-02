<?php

namespace Fungku\NetSuite\Classes;

class LocationSearchRow extends SearchRow {
	public $basic;
	public $addressJoin;
	public $returnAddressJoin;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "LocationSearchRowBasic",
		"addressJoin" => "AddressSearchRowBasic",
		"returnAddressJoin" => "AddressSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

