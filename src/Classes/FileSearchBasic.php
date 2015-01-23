<?php

class FileSearchBasic extends SearchRecordBasic {
	public $availableWithoutLogin;
	public $created;
	public $dateViewed;
	public $description;
	public $documentSize;
	public $externalId;
	public $externalIdString;
	public $fileType;
	public $folder;
	public $internalId;
	public $internalIdNumber;
	public $isAvailable;
	public $isLink;
	public $modified;
	public $name;
	public $owner;
	public $url;
	static $paramtypesmap = array(
		"availableWithoutLogin" => "SearchBooleanField",
		"created" => "SearchDateField",
		"dateViewed" => "SearchDateField",
		"description" => "SearchStringField",
		"documentSize" => "SearchLongField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fileType" => "SearchEnumMultiSelectField",
		"folder" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isAvailable" => "SearchBooleanField",
		"isLink" => "SearchBooleanField",
		"modified" => "SearchDateField",
		"name" => "SearchStringField",
		"owner" => "SearchMultiSelectField",
		"url" => "SearchStringField",
	);
}

