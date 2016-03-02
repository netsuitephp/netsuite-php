<?php

namespace Fungku\NetSuite\Classes;

class ItemFulfillmentPackageList {
	public $package;
	public $replaceAll;
	static $paramtypesmap = array(
		"package" => "ItemFulfillmentPackage[]",
		"replaceAll" => "boolean",
	);
}

