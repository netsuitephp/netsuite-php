<?php namespace Fungku\NetSuite\Classes;

class CampaignChannel extends Record {
	public $name;
	public $eventType;
	public $description;
	public $isInactive;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"eventType" => "CampaignChannelEventType",
		"description" => "string",
		"isInactive" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}

