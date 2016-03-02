<?php

namespace Fungku\NetSuite\Classes;

class SelectCustomFieldRef extends CustomFieldRef {
	public $value;
	static $paramtypesmap = array(
		"value" => "ListOrRecordRef",
	);
}

