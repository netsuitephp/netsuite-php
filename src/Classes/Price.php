<?php

namespace Fungku\NetSuite\Classes;

class Price {
	public $value;
	public $quantity;
	static $paramtypesmap = array(
		"value" => "float",
		"quantity" => "float",
	);
}

