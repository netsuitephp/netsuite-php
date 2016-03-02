<?php

namespace Fungku\NetSuite\Classes;

class FileSiteCategory {
	public $isDefault;
	public $category;
	public $categoryDescription;
	public $website;
	static $paramtypesmap = array(
		"isDefault" => "boolean",
		"category" => "RecordRef",
		"categoryDescription" => "string",
		"website" => "RecordRef",
	);
}

