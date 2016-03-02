<?php

namespace Fungku\NetSuite\Classes;

class ItemReceiptExpenseList {
	public $expense;
	public $replaceAll;
	static $paramtypesmap = array(
		"expense" => "ItemReceiptExpense[]",
		"replaceAll" => "boolean",
	);
}

