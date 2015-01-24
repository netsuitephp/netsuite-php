<?php namespace Fungku\NetSuite\Classes;

class LandedCostSummary {
	public $category;
	public $amount;
	public $source;
	public $transaction;
	static $paramtypesmap = array(
		"category" => "RecordRef",
		"amount" => "float",
		"source" => "LandedCostSource",
		"transaction" => "RecordRef",
	);
}

