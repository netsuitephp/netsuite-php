<?php namespace Fungku\NetSuite\Classes;

class SiteCategoryTranslation {
	public $locale;
	public $language;
	public $displayName;
	public $description;
	public $storeDetailedDescription;
	public $pageTitle;
	static $paramtypesmap = array(
		"locale" => "Language",
		"language" => "string",
		"displayName" => "string",
		"description" => "string",
		"storeDetailedDescription" => "string",
		"pageTitle" => "string",
	);
}

