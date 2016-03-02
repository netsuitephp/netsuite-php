<?php

namespace Fungku\NetSuite\Classes;

class Rate {
	public $value;
	public $priceLevel;
	static $paramtypesmap = array(
		"value" => "float",
		"priceLevel" => "RecordRef",
	);
}

