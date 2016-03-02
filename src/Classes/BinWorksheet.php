<?php

namespace Fungku\NetSuite\Classes;

class BinWorksheet extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $tranDate;
	public $memo;
	public $location;
	public $tranId;
	public $itemList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"tranDate" => "dateTime",
		"memo" => "string",
		"location" => "RecordRef",
		"tranId" => "string",
		"itemList" => "BinWorksheetItemList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

