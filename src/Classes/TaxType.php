<?php

class TaxType extends Record {
	public $name;
	public $description;
	public $nexusesTaxList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"description" => "string",
		"nexusesTaxList" => "TaxTypeNexusesTaxList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

