<?php

namespace Fungku\NetSuite\Classes;

class CustomTransactionLine {
	public $account;
	public $line;
	public $debit;
	public $credit;
	public $amount;
	public $memo;
	public $entity;
	public $department;
	public $class;
	public $location;
	public $customFieldList;
	static $paramtypesmap = array(
		"account" => "RecordRef",
		"line" => "integer",
		"debit" => "float",
		"credit" => "float",
		"amount" => "float",
		"memo" => "string",
		"entity" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"customFieldList" => "CustomFieldList",
	);
}

