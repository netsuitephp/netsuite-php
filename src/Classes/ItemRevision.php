<?php

class ItemRevision extends Record {
	public $item;
	public $name;
	public $effectiveDate;
	public $obsoleteDate;
	public $memo;
	public $inactive;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"item" => "RecordRef",
		"name" => "string",
		"effectiveDate" => "dateTime",
		"obsoleteDate" => "dateTime",
		"memo" => "string",
		"inactive" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}

