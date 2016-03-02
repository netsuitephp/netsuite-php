<?php

namespace Fungku\NetSuite\Classes;

class GetCustomizationIdResult {
	public $status;
	public $totalRecords;
	public $customizationRefList;
	static $paramtypesmap = array(
		"status" => "Status",
		"totalRecords" => "integer",
		"customizationRefList" => "CustomizationRefList",
	);
}

