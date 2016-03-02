<?php

namespace Fungku\NetSuite\Classes;

class CheckExpense {
	public $line;
	public $category;
	public $account;
	public $amount;
	public $memo;
	public $department;
	public $class;
	public $location;
	public $customer;
	public $isBillable;
	public $taxCode;
	public $taxRate1;
	public $tax1Amt;
	public $taxRate2;
	public $grossAmt;
	public $customFieldList;
	static $paramtypesmap = array(
		"line" => "integer",
		"category" => "RecordRef",
		"account" => "RecordRef",
		"amount" => "float",
		"memo" => "string",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"customer" => "RecordRef",
		"isBillable" => "boolean",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"tax1Amt" => "float",
		"taxRate2" => "float",
		"grossAmt" => "float",
		"customFieldList" => "CustomFieldList",
	);
}

