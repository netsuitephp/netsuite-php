<?php

namespace Fungku\NetSuite\Classes;

class PresentationItem {
	public $item;
	public $itemType;
	public $description;
	public $onlinePrice;
	public $basePrice;
	static $paramtypesmap = array(
		"item" => "RecordRef",
		"itemType" => "PresentationItemType",
		"description" => "string",
		"onlinePrice" => "float",
		"basePrice" => "float",
	);
}

