<?php namespace Fungku\NetSuite\Classes;

class PaymentMethodSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "PaymentMethodSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

