<?php

namespace Fungku\NetSuite\Classes;

class CustomerPaymentApplyList {
	public $apply;
	public $replaceAll;
	static $paramtypesmap = array(
		"apply" => "CustomerPaymentApply[]",
		"replaceAll" => "boolean",
	);
}

