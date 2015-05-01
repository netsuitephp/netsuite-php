<?php namespace Fungku\NetSuite\Classes;

class SubsidiarySearch extends SearchRecord {
	public $basic;
	public $addressJoin;
	public $defaultAdvanceToApplyAccountJoin;
	public $returnAddressJoin;
	public $shippingAddressJoin;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "SubsidiarySearchBasic",
		"addressJoin" => "AddressSearchBasic",
		"defaultAdvanceToApplyAccountJoin" => "AccountSearchBasic",
		"returnAddressJoin" => "AddressSearchBasic",
		"shippingAddressJoin" => "AddressSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

