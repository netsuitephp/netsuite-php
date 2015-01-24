<?php namespace Fungku\NetSuite\Classes;

class WorkOrderClose extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $customForm;
	public $tranId;
	public $item;
	public $quantity;
	public $orderQuantity;
	public $scrapQuantity;
	public $createdFrom;
	public $tranDate;
	public $postingPeriod;
	public $memo;
	public $subsidiary;
	public $department;
	public $class;
	public $location;
	public $revision;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"tranId" => "string",
		"item" => "RecordRef",
		"quantity" => "float",
		"orderQuantity" => "float",
		"scrapQuantity" => "float",
		"createdFrom" => "RecordRef",
		"tranDate" => "dateTime",
		"postingPeriod" => "RecordRef",
		"memo" => "string",
		"subsidiary" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"revision" => "RecordRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

