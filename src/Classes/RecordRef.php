<?php

class RecordRef extends BaseRef {
	public $internalId;
	public $externalId;
	public $type;
	static $paramtypesmap = array(
		"internalId" => "string",
		"externalId" => "string",
		"type" => "RecordType",
	);
}

