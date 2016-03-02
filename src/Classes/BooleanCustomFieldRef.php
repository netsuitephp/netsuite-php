<?php

namespace Fungku\NetSuite\Classes;

class BooleanCustomFieldRef extends CustomFieldRef {
	public $value;
	static $paramtypesmap = array(
		"value" => "boolean",
	);
}

