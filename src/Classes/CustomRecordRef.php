<?php

class CustomRecordRef extends BaseRef {
	public $internalId;
	public $externalId;
	public $typeId;
	static $paramtypesmap = array(
		"internalId" => "string",
		"externalId" => "string",
		"typeId" => "string",
	);
}

