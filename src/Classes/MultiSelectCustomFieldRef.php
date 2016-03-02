<?php

namespace Fungku\NetSuite\Classes;

class MultiSelectCustomFieldRef extends CustomFieldRef {
	public $value;
	static $paramtypesmap = array(
		"value" => "ListOrRecordRef[]",
	);
}

