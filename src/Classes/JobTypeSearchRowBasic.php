<?php

class JobTypeSearchRowBasic extends SearchRowBasic {
	public $externalId;
	public $internalId;
	public $isInactive;
	public $name;
	public $parent;
	static $paramtypesmap = array(
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"parent" => "SearchColumnSelectField[]",
	);
}

