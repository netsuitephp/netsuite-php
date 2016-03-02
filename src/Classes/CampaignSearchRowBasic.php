<?php

namespace Fungku\NetSuite\Classes;

class CampaignSearchRowBasic extends SearchRowBasic {
	public $audience;
	public $baseCost;
	public $campaignId;
	public $category;
	public $channel;
	public $cost;
	public $createdDate;
	public $endDate;
	public $event;
	public $executedDate;
	public $expectedRevenue;
	public $externalId;
	public $family;
	public $internalId;
	public $isInactive;
	public $isSalesCampaign;
	public $item;
	public $keyword;
	public $lastModifiedDate;
	public $managerRole;
	public $message;
	public $offer;
	public $owner;
	public $promoCode;
	public $recipient;
	public $response;
	public $responseCategory;
	public $responseCode;
	public $responseDate;
	public $responseNotes;
	public $revenue;
	public $roi;
	public $scheduledDate;
	public $searchEngine;
	public $startDate;
	public $status;
	public $subscription;
	public $title;
	public $url;
	public $vertical;
	public $customFieldList;
	static $paramtypesmap = array(
		"audience" => "SearchColumnSelectField[]",
		"baseCost" => "SearchColumnDoubleField[]",
		"campaignId" => "SearchColumnStringField[]",
		"category" => "SearchColumnSelectField[]",
		"channel" => "SearchColumnSelectField[]",
		"cost" => "SearchColumnDoubleField[]",
		"createdDate" => "SearchColumnDateField[]",
		"endDate" => "SearchColumnDateField[]",
		"event" => "SearchColumnStringField[]",
		"executedDate" => "SearchColumnDateField[]",
		"expectedRevenue" => "SearchColumnDoubleField[]",
		"externalId" => "SearchColumnSelectField[]",
		"family" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isSalesCampaign" => "SearchColumnBooleanField[]",
		"item" => "SearchColumnSelectField[]",
		"keyword" => "SearchColumnStringField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"managerRole" => "SearchColumnSelectField[]",
		"message" => "SearchColumnStringField[]",
		"offer" => "SearchColumnSelectField[]",
		"owner" => "SearchColumnSelectField[]",
		"promoCode" => "SearchColumnStringField[]",
		"recipient" => "SearchColumnSelectField[]",
		"response" => "SearchColumnEnumSelectField[]",
		"responseCategory" => "SearchColumnEnumSelectField[]",
		"responseCode" => "SearchColumnLongField[]",
		"responseDate" => "SearchColumnDateField[]",
		"responseNotes" => "SearchColumnStringField[]",
		"revenue" => "SearchColumnDoubleField[]",
		"roi" => "SearchColumnDoubleField[]",
		"scheduledDate" => "SearchColumnDateField[]",
		"searchEngine" => "SearchColumnSelectField[]",
		"startDate" => "SearchColumnDateField[]",
		"status" => "SearchColumnEnumSelectField[]",
		"subscription" => "SearchColumnSelectField[]",
		"title" => "SearchColumnStringField[]",
		"url" => "SearchColumnStringField[]",
		"vertical" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

