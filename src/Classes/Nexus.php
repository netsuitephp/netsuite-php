<?php

namespace Fungku\NetSuite\Classes;

class Nexus extends Record {
	public $country;
	public $state;
	public $taxAgency;
	public $taxAgencyPst;
	public $taxCode;
	public $description;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"country" => "Country",
		"state" => "RecordRef",
		"taxAgency" => "RecordRef",
		"taxAgencyPst" => "RecordRef",
		"taxCode" => "RecordRef",
		"description" => "string",
		"internalId" => "string",
		"externalId" => "string",
	);
}

