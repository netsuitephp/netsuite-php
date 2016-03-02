<?php

namespace Fungku\NetSuite\Classes;

class EntityCustomFieldFilterList {
	public $filter;
	public $replaceAll;
	static $paramtypesmap = array(
		"filter" => "EntityCustomFieldFilter[]",
		"replaceAll" => "boolean",
	);
}

