<?php

class MultiSelectCustomFieldRef extends CustomFieldRef {
	public $value;
	static $paramtypesmap = array(
		"value" => "ListOrRecordRef[]",
	);
}

