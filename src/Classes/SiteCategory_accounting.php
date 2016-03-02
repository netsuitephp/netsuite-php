<?php

namespace Fungku\NetSuite\Classes;

class SiteCategory_accounting {
	public $website;
	public $category;
	public $isDefault;
	public $categoryDescription;
	static $paramtypesmap = array(
		"website" => "RecordRef",
		"category" => "RecordRef",
		"isDefault" => "boolean",
		"categoryDescription" => "string",
	);
}

