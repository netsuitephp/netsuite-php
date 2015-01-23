<?php

class InitializeAuxRef extends BaseRef {
	public $type;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"type" => "InitializeAuxRefType",
		"internalId" => "string",
		"externalId" => "string",
	);
}

