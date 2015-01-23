<?php

class CampaignCategory extends Record {
	public $name;
	public $parent;
	public $leadSource;
	public $description;
	public $isexternal;
	public $isInactive;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"parent" => "RecordRef",
		"leadSource" => "RecordRef",
		"description" => "string",
		"isexternal" => "boolean",
		"isInactive" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}

