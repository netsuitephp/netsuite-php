<?php

namespace Fungku\NetSuite\Classes;

class PurchaseRequisitionAccountingBookDetail {
	public $accountingBook;
	public $currency;
	public $exchangeRate;
	static $paramtypesmap = array(
		"accountingBook" => "RecordRef",
		"currency" => "RecordRef",
		"exchangeRate" => "float",
	);
}

