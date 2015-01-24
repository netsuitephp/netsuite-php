<?php namespace Fungku\NetSuite\Classes;

class ManufacturingCostDetail {
	public $costCategory;
	public $item;
	public $fixedRate;
	public $runRate;
	static $paramtypesmap = array(
		"costCategory" => "RecordRef",
		"item" => "RecordRef",
		"fixedRate" => "float",
		"runRate" => "float",
	);
}

