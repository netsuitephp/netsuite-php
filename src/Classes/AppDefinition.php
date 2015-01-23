<?php

class AppDefinition extends Record {
	public $name;
	public $description;
	public $packagesList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"description" => "string",
		"packagesList" => "AppDefinitionPackagesList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

