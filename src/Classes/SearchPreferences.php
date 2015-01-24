<?php namespace Fungku\NetSuite\Classes;

class SearchPreferences {
	public $bodyFieldsOnly;
	public $returnSearchColumns;
	public $pageSize;
	static $paramtypesmap = array(
		"bodyFieldsOnly" => "boolean",
		"returnSearchColumns" => "boolean",
		"pageSize" => "integer",
	);
}

