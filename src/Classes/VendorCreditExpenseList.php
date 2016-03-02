<?php

namespace Fungku\NetSuite\Classes;

class VendorCreditExpenseList {
	public $expense;
	public $replaceAll;
	static $paramtypesmap = array(
		"expense" => "VendorCreditExpense[]",
		"replaceAll" => "boolean",
	);
}

