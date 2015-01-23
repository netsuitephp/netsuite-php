<?php

class GetCustomizationIdRequest {
	public $customizationType;
	public $includeInactives;
	static $paramtypesmap = array(
		"customizationType" => "CustomizationType",
		"includeInactives" => "boolean",
	);
}

