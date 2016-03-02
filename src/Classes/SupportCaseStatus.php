<?php

namespace Fungku\NetSuite\Classes;

class SupportCaseStatus extends Record {
	public $name;
	public $insertBefore;
	public $stage;
	public $caseOnHold;
	public $autoCloseCase;
	public $description;
	public $isInactive;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"insertBefore" => "RecordRef",
		"stage" => "SupportCaseStatusStage",
		"caseOnHold" => "boolean",
		"autoCloseCase" => "boolean",
		"description" => "string",
		"isInactive" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}

