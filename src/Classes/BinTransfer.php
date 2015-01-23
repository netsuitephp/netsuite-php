<?php

class BinTransfer extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $tranDate;
	public $memo;
	public $location;
	public $inventoryList;
	public $subsidiary;
	public $tranId;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"tranDate" => "dateTime",
		"memo" => "string",
		"location" => "RecordRef",
		"inventoryList" => "BinTransferInventoryList",
		"subsidiary" => "RecordRef",
		"tranId" => "string",
		"internalId" => "string",
		"externalId" => "string",
	);
}

