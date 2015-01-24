<?php namespace Fungku\NetSuite\Classes;

class GetCustomizationIdRequest {
	public $customizationType;
	public $includeInactives;
	static $paramtypesmap = array(
		"customizationType" => "CustomizationType",
		"includeInactives" => "boolean",
	);
}

