<?php

namespace Fungku\NetSuite\Classes;

class TaxGroupTaxItemList {
	public $taxItem;
	public $replaceAll;
	static $paramtypesmap = array(
		"taxItem" => "TaxGroupTaxItem[]",
		"replaceAll" => "boolean",
	);
}

