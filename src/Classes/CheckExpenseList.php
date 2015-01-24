<?php namespace Fungku\NetSuite\Classes;

class CheckExpenseList {
	public $expense;
	public $replaceAll;
	static $paramtypesmap = array(
		"expense" => "CheckExpense[]",
		"replaceAll" => "boolean",
	);
}

