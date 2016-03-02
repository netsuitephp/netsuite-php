<?php

namespace Fungku\NetSuite\Classes;

class CustomFieldSubAccessList {
	public $subAccess;
	public $replaceAll;
	static $paramtypesmap = array(
		"subAccess" => "CustomFieldSubAccess[]",
		"replaceAll" => "boolean",
	);
}

