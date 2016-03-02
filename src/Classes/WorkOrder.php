<?php

namespace Fungku\NetSuite\Classes;

class WorkOrder extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $customForm;
	public $manufacturingRouting;
	public $autoCalculateLag;
	public $status;
	public $tranId;
	public $entity;
	public $job;
	public $assemblyItem;
	public $expandAssembly;
	public $isWip;
	public $quantity;
	public $units;
	public $tranDate;
	public $orderStatus;
	public $firmed;
	public $memo;
	public $department;
	public $class;
	public $itemList;
	public $location;
	public $schedulingMethod;
	public $salesTeamList;
	public $partnersList;
	public $createdFrom;
	public $sourceTransactionId;
	public $sourceTransactionLine;
	public $specialOrder;
	public $buildable;
	public $options;
	public $built;
	public $startDate;
	public $endDate;
	public $revision;
	public $subsidiary;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"manufacturingRouting" => "RecordRef",
		"autoCalculateLag" => "boolean",
		"status" => "string",
		"tranId" => "string",
		"entity" => "RecordRef",
		"job" => "RecordRef",
		"assemblyItem" => "RecordRef",
		"expandAssembly" => "boolean",
		"isWip" => "boolean",
		"quantity" => "float",
		"units" => "RecordRef",
		"tranDate" => "dateTime",
		"orderStatus" => "WorkOrderOrderStatus",
		"firmed" => "boolean",
		"memo" => "string",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"itemList" => "WorkOrderItemList",
		"location" => "RecordRef",
		"schedulingMethod" => "WorkOrderSchedulingMethod",
		"salesTeamList" => "SalesTeamList",
		"partnersList" => "PartnersList",
		"createdFrom" => "RecordRef",
		"sourceTransactionId" => "string",
		"sourceTransactionLine" => "integer",
		"specialOrder" => "boolean",
		"buildable" => "float",
		"options" => "CustomFieldList",
		"built" => "float",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"revision" => "RecordRef",
		"subsidiary" => "RecordRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

