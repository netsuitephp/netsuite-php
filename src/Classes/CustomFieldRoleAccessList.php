<?php

namespace Fungku\NetSuite\Classes;

class CustomFieldRoleAccessList {
	public $roleAccess;
	public $replaceAll;
	static $paramtypesmap = array(
		"roleAccess" => "CustomFieldRoleAccess[]",
		"replaceAll" => "boolean",
	);
}

