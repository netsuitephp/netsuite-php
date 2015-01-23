<?php

class PriceLevelSearchRowBasic extends SearchRowBasic {
	public $discountPct;
	public $externalId;
	public $internalId;
	public $isInactive;
	public $isOnline;
	public $name;
	static $paramtypesmap = array(
		"discountPct" => "SearchColumnDoubleField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isOnline" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
}

