<?php

namespace Fungku\NetSuite\Classes;

class CustomerPaymentCreditList {
	public $credit;
	public $replaceAll;
	static $paramtypesmap = array(
		"credit" => "CustomerPaymentCredit[]",
		"replaceAll" => "boolean",
	);
}

