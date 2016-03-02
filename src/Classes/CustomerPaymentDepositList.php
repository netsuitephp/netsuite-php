<?php

namespace Fungku\NetSuite\Classes;

class CustomerPaymentDepositList {
	public $deposit;
	public $replaceAll;
	static $paramtypesmap = array(
		"deposit" => "CustomerPaymentDeposit[]",
		"replaceAll" => "boolean",
	);
}

