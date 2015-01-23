<?php

class SupportCaseIssue extends Record {
	public $name;
	public $insertBefore;
	public $description;
	public $isInactive;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"insertBefore" => "RecordRef",
		"description" => "string",
		"isInactive" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}

