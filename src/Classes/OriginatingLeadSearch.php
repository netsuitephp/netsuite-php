<?php namespace Fungku\NetSuite\Classes;

class OriginatingLeadSearch extends SearchRecord {
	public $basic;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "OriginatingLeadSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

