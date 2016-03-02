<?php

namespace Fungku\NetSuite\Classes;

class ExpenseReportExpenseList {
	public $expense;
	public $replaceAll;
	static $paramtypesmap = array(
		"expense" => "ExpenseReportExpense[]",
		"replaceAll" => "boolean",
	);
}

