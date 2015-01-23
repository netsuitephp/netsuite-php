<?php

class TopicSearchRowBasic extends SearchRowBasic {
	public $description;
	public $externalId;
	public $internalId;
	public $isInactive;
	public $name;
	static $paramtypesmap = array(
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
}

