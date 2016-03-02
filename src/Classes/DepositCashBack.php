<?php

namespace Fungku\NetSuite\Classes;

class DepositCashBack {
	public $amount;
	public $account;
	public $department;
	public $class;
	public $location;
	public $memo;
	static $paramtypesmap = array(
		"amount" => "float",
		"account" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"memo" => "string",
	);
}

