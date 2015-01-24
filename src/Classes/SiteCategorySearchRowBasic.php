<?php namespace Fungku\NetSuite\Classes;

class SiteCategorySearchRowBasic extends SearchRowBasic {
	public $dateViewed;
	public $description;
	public $excludeFromSitemap;
	public $externalId;
	public $fullName;
	public $hidden;
	public $hits;
	public $internalId;
	public $longDescription;
	public $name;
	public $pageTitle;
	public $sitemapPriority;
	public $urlComponent;
	static $paramtypesmap = array(
		"dateViewed" => "SearchColumnDateField[]",
		"description" => "SearchColumnStringField[]",
		"excludeFromSitemap" => "SearchColumnBooleanField[]",
		"externalId" => "SearchColumnSelectField[]",
		"fullName" => "SearchColumnStringField[]",
		"hidden" => "SearchColumnBooleanField[]",
		"hits" => "SearchColumnLongField[]",
		"internalId" => "SearchColumnSelectField[]",
		"longDescription" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"pageTitle" => "SearchColumnStringField[]",
		"sitemapPriority" => "SearchColumnEnumSelectField[]",
		"urlComponent" => "SearchColumnStringField[]",
	);
}

