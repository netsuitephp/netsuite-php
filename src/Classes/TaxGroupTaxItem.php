<?php

class TaxGroupTaxItem {
	public $taxName;
	public $rate;
	public $basis;
	public $taxType;
	static $paramtypesmap = array(
		"taxName" => "RecordRef",
		"rate" => "float",
		"basis" => "float",
		"taxType" => "string",
	);
}

