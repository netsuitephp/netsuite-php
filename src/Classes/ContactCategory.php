<?php

class ContactCategory extends Record {
	public $name;
	public $private;
	public $sync;
	public $isInactive;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"private" => "boolean",
		"sync" => "boolean",
		"isInactive" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}

