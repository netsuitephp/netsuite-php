<?php namespace Fungku\NetSuite\Classes;

class VendorCurrency {
	public $currency;
	public $balance;
	public $unbilledOrders;
	static $paramtypesmap = array(
		"currency" => "RecordRef",
		"balance" => "float",
		"unbilledOrders" => "float",
	);
}

