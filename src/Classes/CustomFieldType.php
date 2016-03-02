<?php

namespace Fungku\NetSuite\Classes;

class CustomFieldType extends Record {
	public $fieldType;
	public $scriptId;
	static $paramtypesmap = array(
		"fieldType" => "CustomizationFieldType",
		"scriptId" => "string",
	);
}

