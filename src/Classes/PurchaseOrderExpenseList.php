<?php

namespace Fungku\NetSuite\Classes;

class PurchaseOrderExpenseList {
	public $expense;
	public $replaceAll;
	static $paramtypesmap = array(
		"expense" => "PurchaseOrderExpense[]",
		"replaceAll" => "boolean",
	);
}

