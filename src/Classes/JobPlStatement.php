<?php

namespace Fungku\NetSuite\Classes;

class JobPlStatement {
	public $costCategory;
	public $revenue;
	public $cost;
	public $profit;
	public $margin;
	static $paramtypesmap = array(
		"costCategory" => "string",
		"revenue" => "float",
		"cost" => "float",
		"profit" => "float",
		"margin" => "float",
	);
}

