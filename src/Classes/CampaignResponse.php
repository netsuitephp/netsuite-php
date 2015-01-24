<?php namespace Fungku\NetSuite\Classes;

class CampaignResponse extends Record {
	public $entity;
	public $leadSource;
	public $campaignEvent;
	public $campaignResponseDate;
	public $channel;
	public $response;
	public $note;
	public $responsesList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"entity" => "RecordRef",
		"leadSource" => "RecordRef",
		"campaignEvent" => "RecordRef",
		"campaignResponseDate" => "dateTime",
		"channel" => "string",
		"response" => "CampaignResponseResponse",
		"note" => "string",
		"responsesList" => "CampaignResponseResponsesList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

