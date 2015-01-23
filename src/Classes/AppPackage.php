<?php

class AppPackage extends Record {
	public $appDefinition;
	public $version;
	public $packageFile;
	public $bundle;
	public $description;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"appDefinition" => "RecordRef",
		"version" => "string",
		"packageFile" => "RecordRef",
		"bundle" => "RecordRef",
		"description" => "string",
		"internalId" => "string",
		"externalId" => "string",
	);
}

