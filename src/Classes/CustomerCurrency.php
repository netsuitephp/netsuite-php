<?php

namespace Fungku\NetSuite\Classes;

class CustomerCurrency {
	public $currency;
	public $balance;
	public $consolBalance;
	public $depositBalance;
	public $consolDepositBalance;
	public $overdueBalance;
	public $consolOverdueBalance;
	public $unbilledOrders;
	public $consolUnbilledOrders;
	public $overrideCurrencyFormat;
	public $displaySymbol;
	public $symbolPlacement;
	static $paramtypesmap = array(
		"currency" => "RecordRef",
		"balance" => "float",
		"consolBalance" => "float",
		"depositBalance" => "float",
		"consolDepositBalance" => "float",
		"overdueBalance" => "float",
		"consolOverdueBalance" => "float",
		"unbilledOrders" => "float",
		"consolUnbilledOrders" => "float",
		"overrideCurrencyFormat" => "boolean",
		"displaySymbol" => "string",
		"symbolPlacement" => "CurrencySymbolPlacement",
	);
}

