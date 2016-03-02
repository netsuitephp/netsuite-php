<?php

namespace Fungku\NetSuite\Classes;

class DepositOther {
	public $entity;
	public $amount;
	public $account;
	public $paymentMethod;
	public $refNum;
	public $department;
	public $class;
	public $location;
	public $memo;
	static $paramtypesmap = array(
		"entity" => "RecordRef",
		"amount" => "float",
		"account" => "RecordRef",
		"paymentMethod" => "RecordRef",
		"refNum" => "string",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"memo" => "string",
	);
}

