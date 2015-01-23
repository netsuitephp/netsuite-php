<?php

class AppDefinitionSearchBasic extends SearchRecordBasic {
	public $description;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $name;
	static $paramtypesmap = array(
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"name" => "SearchStringField",
	);
}

