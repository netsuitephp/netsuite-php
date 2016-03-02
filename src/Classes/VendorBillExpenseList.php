<?php

namespace Fungku\NetSuite\Classes;

class VendorBillExpenseList {
	public $expense;
	public $replaceAll;
	static $paramtypesmap = array(
		"expense" => "VendorBillExpense[]",
		"replaceAll" => "boolean",
	);
}

