<?php namespace Fungku\NetSuite\Classes;

class Translation {
	public $locale;
	public $language;
	public $displayName;
	public $description;
	public $salesDescription;
	public $storeDisplayName;
	public $storeDescription;
	public $storeDetailedDescription;
	public $featuredDescription;
	public $specialsDescription;
	public $pageTitle;
	public $noPriceMessage;
	public $outOfStockMessage;
	static $paramtypesmap = array(
		"locale" => "Language",
		"language" => "string",
		"displayName" => "string",
		"description" => "string",
		"salesDescription" => "string",
		"storeDisplayName" => "string",
		"storeDescription" => "string",
		"storeDetailedDescription" => "string",
		"featuredDescription" => "string",
		"specialsDescription" => "string",
		"pageTitle" => "string",
		"noPriceMessage" => "string",
		"outOfStockMessage" => "string",
	);
}

