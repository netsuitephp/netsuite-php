<?php namespace Fungku\NetSuite\Classes;

class SubsidiaryNexus {
	public $nexusId;
	public $country;
	static $paramtypesmap = array(
		"nexusId" => "RecordRef",
		"country" => "string",
	);
}

