<?php

namespace Fungku\NetSuite\Classes;

class ItemCustomFieldFilterList {
	public $filter;
	public $replaceAll;
	static $paramtypesmap = array(
		"filter" => "ItemCustomFieldFilter[]",
		"replaceAll" => "boolean",
	);
}

