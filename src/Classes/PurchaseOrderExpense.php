<?php

namespace Fungku\NetSuite\Classes;

class PurchaseOrderExpense {
	public $line;
	public $category;
	public $linkedOrderList;
	public $account;
	public $amount;
	public $memo;
	public $department;
	public $class;
	public $location;
	public $customer;
	public $isClosed;
	public $isBillable;
	public $createdFrom;
	public $taxCode;
	public $taxRate1;
	public $taxRate2;
	public $tax1Amt;
	public $grossAmt;
	public $customFieldList;
	static $paramtypesmap = array(
		"line" => "integer",
		"category" => "RecordRef",
		"linkedOrderList" => "RecordRefList",
		"account" => "RecordRef",
		"amount" => "float",
		"memo" => "string",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"customer" => "RecordRef",
		"isClosed" => "boolean",
		"isBillable" => "boolean",
		"createdFrom" => "RecordRef",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"tax1Amt" => "float",
		"grossAmt" => "float",
		"customFieldList" => "CustomFieldList",
	);
}

