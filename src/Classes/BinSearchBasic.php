<?php

namespace Fungku\NetSuite\Classes;

class BinSearchBasic extends SearchRecordBasic {
	public $binNumber;
	public $inactive;
	public $internalId;
	public $internalIdNumber;
	public $location;
	public $memo;
	public $customFieldList;
	static $paramtypesmap = array(
		"binNumber" => "SearchStringField",
		"inactive" => "SearchBooleanField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"location" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

