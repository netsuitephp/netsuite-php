<?php namespace Fungku\NetSuite\Classes;

class AppPackageSearchBasic extends SearchRecordBasic {
	public $appDefinition;
	public $description;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $version;
	static $paramtypesmap = array(
		"appDefinition" => "SearchMultiSelectField",
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"version" => "SearchStringField",
	);
}

