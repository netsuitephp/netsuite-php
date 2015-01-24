<?php namespace Fungku\NetSuite\Classes;

class AppPackageSearchRowBasic extends SearchRowBasic {
	public $appDefinition;
	public $bundle;
	public $description;
	public $externalId;
	public $internalId;
	public $packageFile;
	public $version;
	static $paramtypesmap = array(
		"appDefinition" => "SearchColumnSelectField[]",
		"bundle" => "SearchColumnSelectField[]",
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"packageFile" => "SearchColumnSelectField[]",
		"version" => "SearchColumnStringField[]",
	);
}

