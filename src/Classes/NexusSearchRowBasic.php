<?php namespace Fungku\NetSuite\Classes;

class NexusSearchRowBasic extends SearchRowBasic {
	public $country;
	public $description;
	public $externalId;
	public $internalId;
	public $state;
	static $paramtypesmap = array(
		"country" => "SearchColumnEnumSelectField[]",
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"state" => "SearchColumnSelectField[]",
	);
}

