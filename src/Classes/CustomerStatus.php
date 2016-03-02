<?php

namespace Fungku\NetSuite\Classes;

class CustomerStatus extends Record {
	public $name;
	public $stage;
	public $probability;
	public $description;
	public $includeInLeadReports;
	public $isInactive;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"stage" => "CustomerStatusStage",
		"probability" => "float",
		"description" => "string",
		"includeInLeadReports" => "boolean",
		"isInactive" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}

