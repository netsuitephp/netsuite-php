<?php

class AppDefinitionSearchRowBasic extends SearchRowBasic {
	public $description;
	public $externalId;
	public $internalId;
	public $name;
	static $paramtypesmap = array(
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"name" => "SearchColumnStringField[]",
	);
}

