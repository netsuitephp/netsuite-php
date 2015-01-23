<?php

class SalesRoleSearchRowBasic extends SearchRowBasic {
	public $description;
	public $externalId;
	public $internalId;
	public $isInactive;
	public $name;
	static $paramtypesmap = array(
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
}

