<?php

namespace Fungku\NetSuite\Classes;

class PurchaseRequisitionExpense {
	public $line;
	public $category;
	public $location;
	public $isClosed;
	public $account;
	public $poVendor;
	public $estimatedAmount;
	public $amount;
	public $memo;
	public $department;
	public $class;
	public $customer;
	public $linkedOrderList;
	public $linkedOrderStatus;
	public $isBillable;
	static $paramtypesmap = array(
		"line" => "integer",
		"category" => "RecordRef",
		"location" => "RecordRef",
		"isClosed" => "boolean",
		"account" => "RecordRef",
		"poVendor" => "RecordRef",
		"estimatedAmount" => "float",
		"amount" => "float",
		"memo" => "string",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"customer" => "RecordRef",
		"linkedOrderList" => "RecordRefList",
		"linkedOrderStatus" => "string",
		"isBillable" => "boolean",
	);
}

