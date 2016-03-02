<?php

namespace Fungku\NetSuite\Classes;

class ContactCategorySearchRowBasic extends SearchRowBasic {
	public $externalId;
	public $internalId;
	public $isInactive;
	public $name;
	public $private;
	public $sync;
	static $paramtypesmap = array(
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"private" => "SearchColumnBooleanField[]",
		"sync" => "SearchColumnBooleanField[]",
	);
}

