<?php namespace Fungku\NetSuite\Classes;

class CampaignSubscription extends Record {
	public $name;
	public $description;
	public $subscribedByDefault;
	public $unsubscribed;
	public $externalName;
	public $externalDescription;
	public $isInactive;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"description" => "string",
		"subscribedByDefault" => "boolean",
		"unsubscribed" => "boolean",
		"externalName" => "string",
		"externalDescription" => "string",
		"isInactive" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}

