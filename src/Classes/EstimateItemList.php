<?php

namespace Fungku\NetSuite\Classes;

class EstimateItemList {
	public $item;
	public $replaceAll;
	static $paramtypesmap = array(
		"item" => "EstimateItem[]",
		"replaceAll" => "boolean",
	);
}

