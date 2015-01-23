<?php

class Rate {
	public $value;
	public $priceLevel;
	static $paramtypesmap = array(
		"value" => "float",
		"priceLevel" => "RecordRef",
	);
}

