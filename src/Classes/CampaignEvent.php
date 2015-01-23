<?php

class CampaignEvent {
	public $internalId;
	public $campaignGroup;
	public $description;
	public $subscription;
	public $channel;
	public $cost;
	public $status;
	public $dateScheduled;
	public $promoCode;
	public $customFieldList;
	static $paramtypesmap = array(
		"internalId" => "string",
		"campaignGroup" => "RecordRef",
		"description" => "string",
		"subscription" => "RecordRef",
		"channel" => "RecordRef",
		"cost" => "float",
		"status" => "CampaignCampaignEventStatus",
		"dateScheduled" => "dateTime",
		"promoCode" => "RecordRef",
		"customFieldList" => "CustomFieldList",
	);
}

