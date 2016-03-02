<?php

namespace Fungku\NetSuite\Classes;

class WorkOrderIssue extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $customForm;
	public $tranId;
	public $item;
	public $createdFrom;
	public $tranDate;
	public $postingPeriod;
	public $memo;
	public $subsidiary;
	public $department;
	public $class;
	public $location;
	public $revision;
	public $manufacturingRouting;
	public $startOperation;
	public $endOperation;
	public $componentList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"tranId" => "string",
		"item" => "RecordRef",
		"createdFrom" => "RecordRef",
		"tranDate" => "dateTime",
		"postingPeriod" => "RecordRef",
		"memo" => "string",
		"subsidiary" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"revision" => "RecordRef",
		"manufacturingRouting" => "RecordRef",
		"startOperation" => "RecordRef",
		"endOperation" => "RecordRef",
		"componentList" => "WorkOrderIssueComponentList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

