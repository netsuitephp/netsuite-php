<?php namespace Fungku\NetSuite\Classes;

class FileSearchRowBasic extends SearchRowBasic {
	public $availableWithoutLogin;
	public $created;
	public $dateViewed;
	public $description;
	public $documentSize;
	public $externalId;
	public $fileType;
	public $folder;
	public $hits;
	public $hostedPath;
	public $internalId;
	public $isAvailable;
	public $modified;
	public $name;
	public $owner;
	public $url;
	static $paramtypesmap = array(
		"availableWithoutLogin" => "SearchColumnBooleanField[]",
		"created" => "SearchColumnDateField[]",
		"dateViewed" => "SearchColumnDateField[]",
		"description" => "SearchColumnStringField[]",
		"documentSize" => "SearchColumnLongField[]",
		"externalId" => "SearchColumnStringField[]",
		"fileType" => "SearchColumnEnumSelectField[]",
		"folder" => "SearchColumnSelectField[]",
		"hits" => "SearchColumnLongField[]",
		"hostedPath" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isAvailable" => "SearchColumnBooleanField[]",
		"modified" => "SearchColumnDateField[]",
		"name" => "SearchColumnStringField[]",
		"owner" => "SearchColumnSelectField[]",
		"url" => "SearchColumnStringField[]",
	);
}

