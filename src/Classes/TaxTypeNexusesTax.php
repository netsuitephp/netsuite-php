<?php

class TaxTypeNexusesTax {
	public $nexus;
	public $description;
	public $saleTaxAcct;
	public $purchTaxAcct;
	static $paramtypesmap = array(
		"nexus" => "RecordRef",
		"description" => "string",
		"saleTaxAcct" => "RecordRef",
		"purchTaxAcct" => "RecordRef",
	);
}

