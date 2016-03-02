<?php

namespace Fungku\NetSuite\Classes;

class CustomRecordTypePermissionsList {
	public $permissions;
	public $replaceAll;
	static $paramtypesmap = array(
		"permissions" => "CustomRecordTypePermissions[]",
		"replaceAll" => "boolean",
	);
}

