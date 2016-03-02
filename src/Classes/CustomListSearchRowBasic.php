<?php

namespace Fungku\NetSuite\Classes;

class CustomListSearchRowBasic extends SearchRowBasic {
	public $description;
	public $internalId;
	public $isInactive;
	public $isOrdered;
	public $name;
	public $owner;
	public $scriptId;
	static $paramtypesmap = array(
		"description" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isOrdered" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"owner" => "SearchColumnSelectField[]",
		"scriptId" => "SearchColumnStringField[]",
	);
}

