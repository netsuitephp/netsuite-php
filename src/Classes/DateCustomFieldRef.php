<?php

namespace Fungku\NetSuite\Classes;

class DateCustomFieldRef extends CustomFieldRef {
	public $value;
	static $paramtypesmap = array(
		"value" => "dateTime",
	);
}

