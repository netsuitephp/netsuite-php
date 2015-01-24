<?php namespace Fungku\NetSuite\Classes;

class SiteCategorySearchBasic extends SearchRecordBasic {
	public $dateViewed;
	public $description;
	public $excludeFromSitemap;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $name;
	public $sitemapPriority;
	static $paramtypesmap = array(
		"dateViewed" => "SearchDateField",
		"description" => "SearchStringField",
		"excludeFromSitemap" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"name" => "SearchMultiSelectField",
		"sitemapPriority" => "SearchEnumMultiSelectField",
	);
}

