<?php namespace Fungku\NetSuite\Classes;

class ExpenseReportExpense {
	public $line;
	public $expenseDate;
	public $category;
	public $quantity;
	public $rate;
	public $foreignAmount;
	public $currency;
	public $exchangeRate;
	public $amount;
	public $taxCode;
	public $memo;
	public $taxRate1;
	public $tax1Amt;
	public $department;
	public $grossAmt;
	public $taxRate2;
	public $class;
	public $customer;
	public $location;
	public $isBillable;
	public $expMediaItem;
	public $isNonReimbursable;
	public $receipt;
	public $refNumber;
	public $customFieldList;
	static $paramtypesmap = array(
		"line" => "integer",
		"expenseDate" => "dateTime",
		"category" => "RecordRef",
		"quantity" => "float",
		"rate" => "float",
		"foreignAmount" => "float",
		"currency" => "RecordRef",
		"exchangeRate" => "float",
		"amount" => "float",
		"taxCode" => "RecordRef",
		"memo" => "string",
		"taxRate1" => "float",
		"tax1Amt" => "float",
		"department" => "RecordRef",
		"grossAmt" => "float",
		"taxRate2" => "float",
		"class" => "RecordRef",
		"customer" => "RecordRef",
		"location" => "RecordRef",
		"isBillable" => "boolean",
		"expMediaItem" => "RecordRef",
		"isNonReimbursable" => "boolean",
		"receipt" => "boolean",
		"refNumber" => "integer",
		"customFieldList" => "CustomFieldList",
	);
}

