<?php namespace Fungku\NetSuite\Classes;

class CustomTransactionAccountingBookDetail {
	public $accountingBook;
	public $currency;
	public $exchangeRate;
	static $paramtypesmap = array(
		"accountingBook" => "RecordRef",
		"currency" => "RecordRef",
		"exchangeRate" => "float",
	);
}

