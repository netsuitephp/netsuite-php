<?php

class Bin extends Record {
	public $binNumber;
	public $location;
	public $memo;
	public $isInactive;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"binNumber" => "string",
		"location" => "RecordRef",
		"memo" => "string",
		"isInactive" => "boolean",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

