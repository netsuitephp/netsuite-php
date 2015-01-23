<?php

class NexusSearchBasic extends SearchRecordBasic {
	public $country;
	public $description;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $state;
	static $paramtypesmap = array(
		"country" => "SearchEnumMultiSelectField",
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"state" => "SearchMultiSelectField",
	);
}

