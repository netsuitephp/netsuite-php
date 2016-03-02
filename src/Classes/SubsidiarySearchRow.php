<?php

namespace Fungku\NetSuite\Classes;

class SubsidiarySearchRow extends SearchRow {
	public $basic;
	public $addressJoin;
	public $defaultAdvanceToApplyAccountJoin;
	public $returnAddressJoin;
	public $shippingAddressJoin;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "SubsidiarySearchRowBasic",
		"addressJoin" => "AddressSearchRowBasic",
		"defaultAdvanceToApplyAccountJoin" => "AccountSearchRowBasic",
		"returnAddressJoin" => "AddressSearchRowBasic",
		"shippingAddressJoin" => "AddressSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

