<?php namespace Fungku\NetSuite\Classes;

class CustomFieldDepartmentAccess {
	public $dept;
	public $accessLevel;
	public $searchLevel;
	static $paramtypesmap = array(
		"dept" => "RecordRef",
		"accessLevel" => "CustomizationAccessLevel",
		"searchLevel" => "CustomizationSearchLevel",
	);
}

