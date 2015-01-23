<?php

class BinSearchRowBasic extends SearchRowBasic {
	public $binNumber;
	public $inactive;
	public $internalId;
	public $location;
	public $memo;
	public $customFieldList;
	static $paramtypesmap = array(
		"binNumber" => "SearchColumnStringField[]",
		"inactive" => "SearchColumnBooleanField[]",
		"internalId" => "SearchColumnSelectField[]",
		"location" => "SearchColumnStringField[]",
		"memo" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

