<?php

namespace Fungku\NetSuite\Classes;

class CustomerGroupPricing {
	public $group;
	public $level;
	static $paramtypesmap = array(
		"group" => "RecordRef",
		"level" => "RecordRef",
	);
}

