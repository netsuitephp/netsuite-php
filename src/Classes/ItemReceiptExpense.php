<?php

namespace Fungku\NetSuite\Classes;

class ItemReceiptExpense {
	public $markReceived;
	public $orderLine;
	public $line;
	public $account;
	public $memo;
	public $amount;
	public $customFieldList;
	static $paramtypesmap = array(
		"markReceived" => "boolean",
		"orderLine" => "integer",
		"line" => "integer",
		"account" => "string",
		"memo" => "string",
		"amount" => "float",
		"customFieldList" => "CustomFieldList",
	);
}

